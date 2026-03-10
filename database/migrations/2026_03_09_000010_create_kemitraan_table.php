<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kemitraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mitra', 50);
            $table->text('penjelasan_singkat');
            $table->string('gambar_mitra', 255);
            $table->string('gambar_kegiatan', 255);
            $table->text('ringkasan_kegiatan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kemitraan');
    }
};
