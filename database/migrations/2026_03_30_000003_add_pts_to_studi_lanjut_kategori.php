<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('studi_lanjut', function (Blueprint $table) {
            $table->string('kategori', 20)->change();
        });
    }

    public function down(): void
    {
        Schema::table('studi_lanjut', function (Blueprint $table) {
            $table->string('kategori', 20)->change();
        });
    }
};
