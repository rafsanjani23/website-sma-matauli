<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('studi_lanjut', function (Blueprint $table) {
            $table->id();
            $table->string('foto', 255)->nullable();
            $table->string('nama_alumni', 50);
            $table->string('nama_lembaga', 50);
            $table->enum('kategori', ['PTN', 'PTLN', 'TNI-Polri', 'Kedinasan']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('studi_lanjut');
    }
};
