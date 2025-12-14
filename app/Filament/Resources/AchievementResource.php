<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

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

                // Input untuk Tanggal Pencapaian (ganti dari year ke date)
                Forms\Components\DatePicker::make('achievement_date')
                    ->required()
                    ->label('Tanggal Pencapaian'),

                // Input untuk Foto 1 (wajib)
                Forms\Components\FileUpload::make('foto1')
                    ->required()
                    ->label('Foto 1')
                    ->directory('achievements')
                    ->visibility('public')
                    ->imageEditor()
                    ->image(),

                // Input untuk Foto 2 (opsional)
                Forms\Components\FileUpload::make('foto2')
                    ->nullable()
                    ->label('Foto 2')
                    ->directory('achievements')
                    ->visibility('public')
                    ->imageEditor()
                    ->image(),

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
                Tables\Columns\TextColumn::make('achievement_date')
                    ->label('Tanggal Pencapaian')
                    ->date('d M Y') // format: 16 Agu 2025
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto1')
                    ->label('Foto 1')
                    ->square(),
                Tables\Columns\ImageColumn::make('foto2')
                    ->label('Foto 2')
                    ->square(),
                Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
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
