<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->change();
        });

        Schema::table('program_kemendikdasmen', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->text('deskripsi')->nullable(false)->change();
        });

        Schema::table('program_kemendikdasmen', function (Blueprint $table) {
            $table->text('deskripsi')->nullable(false)->change();
        });
    }
};
