<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('video', function (Blueprint $table) {
            $table->string('video_path')->nullable()->after('youtube_id');
            $table->string('thumbnail_path')->nullable()->after('video_path');
        });

        Schema::table('video', function (Blueprint $table) {
            $table->string('youtube_id', 50)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('video', function (Blueprint $table) {
            $table->dropColumn(['video_path', 'thumbnail_path']);
        });

        Schema::table('video', function (Blueprint $table) {
            $table->string('youtube_id', 50)->nullable(false)->change();
        });
    }
};
