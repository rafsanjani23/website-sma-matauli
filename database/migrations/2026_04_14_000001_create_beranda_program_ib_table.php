<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beranda_program_ib', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150);
            $table->text('ringkasan');
            $table->string('foto', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beranda_program_ib');
    }
};
