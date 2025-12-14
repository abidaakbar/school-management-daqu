<?php

namespace App\Filament\Resources\PaperResource\Pages;

use App\Filament\Resources\PaperResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Validation\Rule;

class CreatePaper extends CreateRecord
{
    protected static string $resource = PaperResource::class;

    // Menambahkan aturan validasi
    protected function rules(): array
    {
        return [
            'record.title' => ['required', 'string', 'max:255'], // Validasi judul
            'record.author' => ['required', 'string', 'max:255'], // Validasi penulis
            'record.pdf_path' => ['required', 'file', 'mimes:pdf', 'max:2048'], // Validasi file PDF
        ];
    }

    // // Jika ada logic lain yang ingin ditambahkan, seperti modifikasi form
    // protected function getForm(): array
    // {
    //     return parent::getForm()->schema([
    //         // Custom form configuration jika diperlukan
    //     ]);
    // }

    protected function getRedirectUrl(): string
    {
        return PaperResource::getUrl('index');
    }
}
