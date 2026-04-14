<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->text('ringkasan')->nullable()->after('deskripsi');
            $table->longText('isi_konten')->nullable()->after('ringkasan');
            $table->string('gambar_opsional', 255)->nullable()->after('gambar');
        });
    }

    public function down(): void
    {
        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->dropColumn(['ringkasan', 'isi_konten', 'gambar_opsional']);
        });
    }
};
