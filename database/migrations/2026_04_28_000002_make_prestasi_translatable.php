<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('prestasi', function (Blueprint $table) {
            $table->json('judul_tmp')->nullable()->after('judul');
            $table->json('nama_lomba_tmp')->nullable()->after('nama_lomba');
            $table->json('tingkatan_tmp')->nullable()->after('tingkatan');
            $table->json('isi_tmp')->nullable()->after('isi');
        });

        DB::table('prestasi')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('prestasi')->where('id', $row->id)->update([
                    'judul_tmp'      => json_encode(['id' => $row->judul ?? '']),
                    'nama_lomba_tmp' => json_encode(['id' => $row->nama_lomba ?? '']),
                    'tingkatan_tmp'  => json_encode(['id' => $row->tingkatan ?? '']),
                    'isi_tmp'        => json_encode(['id' => $row->isi ?? '']),
                ]);
            }
        });

        Schema::table('prestasi', function (Blueprint $table) {
            $table->dropColumn(['judul', 'nama_lomba', 'tingkatan', 'isi']);
        });

        Schema::table('prestasi', function (Blueprint $table) {
            $table->renameColumn('judul_tmp', 'judul');
            $table->renameColumn('nama_lomba_tmp', 'nama_lomba');
            $table->renameColumn('tingkatan_tmp', 'tingkatan');
            $table->renameColumn('isi_tmp', 'isi');
        });
    }

    public function down(): void
    {
        Schema::table('prestasi', function (Blueprint $table) {
            $table->string('judul_old', 50)->nullable()->after('judul');
            $table->string('nama_lomba_old', 50)->nullable()->after('nama_lomba');
            $table->string('tingkatan_old', 50)->nullable()->after('tingkatan');
            $table->text('isi_old')->nullable()->after('isi');
        });

        DB::table('prestasi')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $j  = json_decode($row->judul ?? '{}', true);
                $nl = json_decode($row->nama_lomba ?? '{}', true);
                $t  = json_decode($row->tingkatan ?? '{}', true);
                $i  = json_decode($row->isi ?? '{}', true);

                DB::table('prestasi')->where('id', $row->id)->update([
                    'judul_old'      => $j['id']  ?? ($j['en']  ?? ''),
                    'nama_lomba_old' => $nl['id'] ?? ($nl['en'] ?? ''),
                    'tingkatan_old'  => $t['id']  ?? ($t['en']  ?? ''),
                    'isi_old'        => $i['id']  ?? ($i['en']  ?? ''),
                ]);
            }
        });

        Schema::table('prestasi', function (Blueprint $table) {
            $table->dropColumn(['judul', 'nama_lomba', 'tingkatan', 'isi']);
        });

        Schema::table('prestasi', function (Blueprint $table) {
            $table->renameColumn('judul_old', 'judul');
            $table->renameColumn('nama_lomba_old', 'nama_lomba');
            $table->renameColumn('tingkatan_old', 'tingkatan');
            $table->renameColumn('isi_old', 'isi');
        });
    }
};
