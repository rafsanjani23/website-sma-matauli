<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_ib', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150);
            $table->string('gambar', 255);
            $table->text('ringkasan');
            $table->longText('isi_konten');
            $table->string('gambar_opsional', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_ib');
    }
};
