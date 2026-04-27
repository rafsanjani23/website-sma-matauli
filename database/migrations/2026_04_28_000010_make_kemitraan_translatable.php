<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kemitraan', function (Blueprint $table) {
            $table->json('nama_mitra_tmp')->nullable()->after('nama_mitra');
            $table->json('penjelasan_singkat_tmp')->nullable()->after('penjelasan_singkat');
            $table->json('ringkasan_kegiatan_tmp')->nullable()->after('ringkasan_kegiatan');
        });

        DB::table('kemitraan')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('kemitraan')->where('id', $row->id)->update([
                    'nama_mitra_tmp'         => json_encode(['id' => $row->nama_mitra ?? '']),
                    'penjelasan_singkat_tmp' => json_encode(['id' => $row->penjelasan_singkat ?? '']),
                    'ringkasan_kegiatan_tmp' => json_encode(['id' => $row->ringkasan_kegiatan ?? '']),
                ]);
            }
        });

        Schema::table('kemitraan', function (Blueprint $table) {
            $table->dropColumn(['nama_mitra', 'penjelasan_singkat', 'ringkasan_kegiatan']);
        });

        Schema::table('kemitraan', function (Blueprint $table) {
            $table->renameColumn('nama_mitra_tmp', 'nama_mitra');
            $table->renameColumn('penjelasan_singkat_tmp', 'penjelasan_singkat');
            $table->renameColumn('ringkasan_kegiatan_tmp', 'ringkasan_kegiatan');
        });
    }

    public function down(): void
    {
        Schema::table('kemitraan', function (Blueprint $table) {
            $table->string('nama_mitra_old', 50)->nullable()->after('nama_mitra');
            $table->text('penjelasan_singkat_old')->nullable()->after('penjelasan_singkat');
            $table->text('ringkasan_kegiatan_old')->nullable()->after('ringkasan_kegiatan');
        });

        DB::table('kemitraan')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $nm = json_decode($row->nama_mitra ?? '{}', true);
                $ps = json_decode($row->penjelasan_singkat ?? '{}', true);
                $rk = json_decode($row->ringkasan_kegiatan ?? '{}', true);

                DB::table('kemitraan')->where('id', $row->id)->update([
                    'nama_mitra_old'         => $nm['id'] ?? ($nm['en'] ?? ''),
                    'penjelasan_singkat_old' => $ps['id'] ?? ($ps['en'] ?? ''),
                    'ringkasan_kegiatan_old' => $rk['id'] ?? ($rk['en'] ?? ''),
                ]);
            }
        });

        Schema::table('kemitraan', function (Blueprint $table) {
            $table->dropColumn(['nama_mitra', 'penjelasan_singkat', 'ringkasan_kegiatan']);
        });

        Schema::table('kemitraan', function (Blueprint $table) {
            $table->renameColumn('nama_mitra_old', 'nama_mitra');
            $table->renameColumn('penjelasan_singkat_old', 'penjelasan_singkat');
            $table->renameColumn('ringkasan_kegiatan_old', 'ringkasan_kegiatan');
        });
    }
};
