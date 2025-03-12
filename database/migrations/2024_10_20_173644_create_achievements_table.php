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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('student_name'); // Nama siswa yang mendapatkan pencapaian
            $table->string('achievement'); // Pencapaian yang diperoleh
            $table->year('year'); // Tahun pencapaian
            $table->string('foto1'); // Foto wajib (tidak boleh null)
            $table->string('foto2')->nullable(); // Foto opsional (boleh null)
            $table->text('keterangan')->nullable(); // Keterangan opsional (boleh null)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
