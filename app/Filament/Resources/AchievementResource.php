<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk Nama Siswa (wajib)
                Forms\Components\TextInput::make('student_name')
                    ->required()
                    ->label('Nama Siswa'),

                // Input untuk Pencapaian (wajib)
                Forms\Components\TextInput::make('achievement')
                    ->required()
                    ->label('Pencapaian'),

                // Input untuk Tahun (wajib)
                Forms\Components\TextInput::make('year')
                    ->numeric()
                    ->required()
                    ->label('Tahun'),

                // Input untuk Foto 1 (wajib)
                Forms\Components\FileUpload::make('foto1')
                    ->required()
                    ->label('Foto 1')
                    ->image() // Hanya menerima file gambar
                    ->directory('achievements'),

                // Input untuk Foto 2 (opsional)
                Forms\Components\FileUpload::make('foto2')
                    ->nullable()
                    ->label('Foto 2')
                    ->image() // Hanya menerima file gambar
                    ->directory('achievements'),

                // Input untuk Keterangan (opsional)
                Forms\Components\Textarea::make('keterangan')
                    ->nullable()
                    ->label('Keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_name')->label('Nama Siswa'),
                Tables\Columns\TextColumn::make('achievement')->label('Pencapaian'),
                Tables\Columns\TextColumn::make('year')->label('Tahun'),
                Tables\Columns\TextColumn::make('foto1')->label('Foto 1'),
                Tables\Columns\TextColumn::make('foto2')->label('Foto 2')->sortable(),
                Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
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
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
