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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // ID guru
            $table->string('nama'); // Nama guru
            $table->string('foto')->nullable(); // Path lokasi foto guru (opsional, bisa null)
            $table->string('email'); // Email guru
            $table->string('no_telp'); // Nomor telepon guru
            $table->string('jabatan'); // Jabatan guru (misalnya, Kepala Sekolah, Guru Matematika, dll.)
            $table->timestamps(); // Menyimpan created_at dan updated_at secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
