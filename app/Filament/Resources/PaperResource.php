<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaperResource\Pages;
use App\Models\Paper;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PaperResource extends Resource
{
    protected static ?string $model = Paper::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk Judul (wajib)
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Title'), // Anda dapat menghapus label jika ingin tampil tanpa label

                // Input untuk Penulis (wajib)
                Forms\Components\TextInput::make('author')
                    ->required()
                    ->label('Author'), // Anda dapat menghapus label jika ingin tampil tanpa label

                // Input untuk Path PDF (wajib)
                Forms\Components\FileUpload::make('pdf_path')
                    ->required()
                    ->label('PDF File') // Anda dapat menghapus label jika ingin tampil tanpa label
                    ->maxSize(10240) // Maksimal ukuran file 2MB
                    ->preserveFilenames() // Menyimpan nama file asli
                    ->reactive() // Jika ingin reaktif terhadap form
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('papers'), // Folder di mana file akan disimpan
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('author')->label('Author'),
                Tables\Columns\TextColumn::make('pdf_path')->label('PDF Path'),
                //
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
            'index' => Pages\ListPapers::route('/'),
            'create' => Pages\CreatePaper::route('/create'),
            'edit' => Pages\EditPaper::route('/{record}/edit'),
        ];
    }
}
