<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->json('nama_tmp')->nullable()->after('nama');
        });

        DB::table('kegiatan_asrama')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('kegiatan_asrama')->where('id', $row->id)->update([
                    'nama_tmp' => json_encode(['id' => $row->nama ?? '']),
                ]);
            }
        });

        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->dropColumn('nama');
        });

        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->renameColumn('nama_tmp', 'nama');
        });
    }

    public function down(): void
    {
        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->string('nama_old', 50)->nullable()->after('nama');
        });

        DB::table('kegiatan_asrama')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $n = json_decode($row->nama ?? '{}', true);
                DB::table('kegiatan_asrama')->where('id', $row->id)->update([
                    'nama_old' => $n['id'] ?? ($n['en'] ?? ''),
                ]);
            }
        });

        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->dropColumn('nama');
        });

        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->renameColumn('nama_old', 'nama');
        });
    }
};
