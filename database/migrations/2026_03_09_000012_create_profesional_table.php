<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profesional', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nama_lembaga', 50);
            $table->string('foto', 255)->nullable();
            $table->string('link_facebook', 50)->nullable();
            $table->string('link_twitter', 50)->nullable();
            $table->string('link_linkedin', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profesional');
    }
};
