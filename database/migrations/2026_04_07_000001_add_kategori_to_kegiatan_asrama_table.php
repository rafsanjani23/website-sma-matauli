<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->enum('kategori', ['rutin', 'tidak_rutin'])->default('rutin')->after('nama');
        });
    }

    public function down(): void
    {
        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
};
