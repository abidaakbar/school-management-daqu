<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // ID berita
            $table->string('foto1'); // Foto 1 (wajib)
            $table->string('foto2')->nullable(); // Foto 2 (opsional)
            $table->string('foto3')->nullable(); // Foto 3 (opsional)
            $table->string('title'); // Judul berita
            $table->text('content'); // Konten berita
            $table->date('published_at'); // Tanggal publikasi
            $table->timestamps(); // Menyimpan created_at dan updated_at secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
