<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengumuman_asrama', function (Blueprint $table) {
            $table->id();
            $table->json('judul');
            $table->json('ringkasan');
            $table->json('isi');
            $table->string('gambar', 255);
            $table->string('link_facebook', 255)->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengumuman_asrama');
    }
};
