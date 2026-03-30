<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('profesional', function (Blueprint $table) {
            $table->string('angkatan', 20)->nullable()->after('nama_lembaga');
        });
    }

    public function down(): void
    {
        Schema::table('profesional', function (Blueprint $table) {
            $table->dropColumn('angkatan');
        });
    }
};
