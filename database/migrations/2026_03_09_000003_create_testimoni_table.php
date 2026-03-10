<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('tahun_alumni', 50);
            $table->string('foto', 255)->nullable();
            $table->text('isi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimoni');
    }
};
