<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $recordTitleAttribute = 'name';   // judul di breadcrumb & header

    /* -----------------------------------------------------------------
     |  FORM
     * -----------------------------------------------------------------*/
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable() // 👁 toggle lihat password
                    ->dehydrateStateUsing(
                        fn(?string $state): ?string =>
                        filled($state) ? Hash::make($state) : null
                    )
                    ->dehydrated(fn(?string $state): bool => filled($state))
                    ->required(fn(string $context) => $context === 'create'),

                Select::make('role')
                    ->label('Role')
                    ->options(\Spatie\Permission\Models\Role::all()->pluck('name', 'name'))
                    ->required()
                    ->searchable()
                    ->native(false),
            ]);
    }


    /* -----------------------------------------------------------------
     |  TABLE
     * -----------------------------------------------------------------*/
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->copyable(),
                BadgeColumn::make('roles.name')
                    ->label('Roles')
                    ->colors(['primary']),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since(),
            ])
            ->filters([
                SelectFilter::make('roles')
                    ->label('Filter Role')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload(),
            ])
            ->actions([
                DeleteAction::make(), // Menambahkan tombol delete
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }


    /* -----------------------------------------------------------------
     |  RELATIONS
     * -----------------------------------------------------------------*/
    public static function getRelations(): array
    {
        return [];
    }

    /* -----------------------------------------------------------------
     |  PAGES
     * -----------------------------------------------------------------*/
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit'   => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    /* -----------------------------------------------------------------
     |  PANEL‑LEVEL AUTHZ — hanya role admin
     * -----------------------------------------------------------------*/
    public static function canAccess(): bool
    {
        return auth()->user()?->hasRole('admin');
    }
}
