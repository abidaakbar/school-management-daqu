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
                    ->label('Title'),

                // Input untuk Penulis (wajib)
                Forms\Components\TextInput::make('author')
                    ->required()
                    ->label('Author'),

                // Input untuk Abstrak (opsional/tapi biasanya wajib)
                Forms\Components\Textarea::make('abstract')
                    ->required()
                    ->label('Abstract')
                    ->rows(5)
                    ->placeholder('Tulis abstrak singkat paper...'),

                // Input untuk Tanggal Publish
                Forms\Components\DatePicker::make('published_at')
                    ->required()
                    ->label('Published Date'),

                // Input untuk Path PDF
                Forms\Components\FileUpload::make('pdf_path')
                    ->required()
                    ->label('PDF File')
                    ->maxSize(10240) // dalam KB (10 MB)
                    ->preserveFilenames()
                    ->reactive()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('papers'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('author')->label('Author')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('abstract')
                    ->label('Abstract')
                    ->limit(50), // batasi agar tidak terlalu panjang di tabel
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Published Date')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pdf_path')->label('PDF Path'),
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
