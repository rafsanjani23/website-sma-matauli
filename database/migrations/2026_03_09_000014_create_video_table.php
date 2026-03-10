<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('video', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 50);
            $table->string('youtube_id', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video');
    }
};
