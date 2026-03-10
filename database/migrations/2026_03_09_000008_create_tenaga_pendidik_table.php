<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tenaga_pendidik', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('mata_pelajaran', 50);
            $table->string('foto', 255)->nullable();
            $table->enum('kategori', ['Guru Mata Pelajaran', 'IB']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenaga_pendidik');
    }
};
