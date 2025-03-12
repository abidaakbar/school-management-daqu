<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto1')
                    ->label('Foto 1')
                    ->required() // Wajib diisi
                    ->image() // Hanya menerima gambar
                    ->maxSize(5 * 1024), // Maksimal ukuran file 5MB

                Forms\Components\FileUpload::make('foto2')
                    ->label('Foto 2 (Opsional)')
                    ->nullable() // Boleh kosong
                    ->image()
                    ->maxSize(5 * 1024), // Maksimal ukuran file 5MB

                Forms\Components\FileUpload::make('foto3')
                    ->label('Foto 3 (Opsional)')
                    ->nullable() // Boleh kosong
                    ->image()
                    ->maxSize(5 * 1024), // Maksimal ukuran file 5MB

                Forms\Components\TextInput::make('title')
                    ->label('Judul Berita')
                    ->required(), // Wajib diisi

                Forms\Components\Textarea::make('content')
                    ->label('Konten Berita')
                    ->required(), // Wajib diisi

                Forms\Components\DatePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->required(), // Wajib diisi
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('published_at'),
                // Tambahkan kolom lain yang diperlukan
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
