<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OsisMemberResource\Pages;
use App\Filament\Resources\OsisMemberResource\RelationManagers;
use App\Models\OsisMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OsisMemberResource extends Resource
{
    protected static ?string $model = OsisMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk Nama (wajib)
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama'),

                // Input untuk Jabatan (wajib)
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->label('Jabatan'),

                Forms\Components\FileUpload::make('foto')
                    ->label('Foto Anggota')
                    ->image()
                    ->directory('osis-members') // folder penyimpanan
                    ->visibility('public')      // supaya bisa diakses
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk menampilkan nama
                Tables\Columns\TextColumn::make('name')->label('Nama'),

                // Kolom untuk menampilkan jabatan
                Tables\Columns\TextColumn::make('position')->label('Jabatan'),

                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->square()      // biar proporsional kotak
                // ->size(60),     // atur ukuran thumbnail

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(), // Menambahkan tombol delete
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOsisMembers::route('/'),
            'create' => Pages\CreateOsisMember::route('/create'),
            'edit' => Pages\EditOsisMember::route('/{record}/edit'),
        ];
    }
}
