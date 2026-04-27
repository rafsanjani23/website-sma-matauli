<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->json('judul_tmp')->nullable()->after('judul');
            $table->json('deskripsi_tmp')->nullable()->after('deskripsi');
            $table->json('ringkasan_tmp')->nullable()->after('ringkasan');
            $table->json('isi_konten_tmp')->nullable()->after('isi_konten');
        });

        DB::table('program_kemataulian')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('program_kemataulian')->where('id', $row->id)->update([
                    'judul_tmp'      => json_encode(['id' => $row->judul ?? '']),
                    'deskripsi_tmp'  => json_encode(['id' => $row->deskripsi ?? '']),
                    'ringkasan_tmp'  => json_encode(['id' => $row->ringkasan ?? '']),
                    'isi_konten_tmp' => json_encode(['id' => $row->isi_konten ?? '']),
                ]);
            }
        });

        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->dropColumn(['judul', 'deskripsi', 'ringkasan', 'isi_konten']);
        });

        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->renameColumn('judul_tmp', 'judul');
            $table->renameColumn('deskripsi_tmp', 'deskripsi');
            $table->renameColumn('ringkasan_tmp', 'ringkasan');
            $table->renameColumn('isi_konten_tmp', 'isi_konten');
        });
    }

    public function down(): void
    {
        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->string('judul_old', 100)->nullable()->after('judul');
            $table->text('deskripsi_old')->nullable()->after('deskripsi');
            $table->text('ringkasan_old')->nullable()->after('ringkasan');
            $table->longText('isi_konten_old')->nullable()->after('isi_konten');
        });

        DB::table('program_kemataulian')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $j  = json_decode($row->judul ?? '{}', true);
                $d  = json_decode($row->deskripsi ?? '{}', true);
                $r  = json_decode($row->ringkasan ?? '{}', true);
                $ik = json_decode($row->isi_konten ?? '{}', true);

                DB::table('program_kemataulian')->where('id', $row->id)->update([
                    'judul_old'      => $j['id']  ?? ($j['en']  ?? ''),
                    'deskripsi_old'  => $d['id']  ?? ($d['en']  ?? ''),
                    'ringkasan_old'  => $r['id']  ?? ($r['en']  ?? ''),
                    'isi_konten_old' => $ik['id'] ?? ($ik['en'] ?? ''),
                ]);
            }
        });

        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->dropColumn(['judul', 'deskripsi', 'ringkasan', 'isi_konten']);
        });

        Schema::table('program_kemataulian', function (Blueprint $table) {
            $table->renameColumn('judul_old', 'judul');
            $table->renameColumn('deskripsi_old', 'deskripsi');
            $table->renameColumn('ringkasan_old', 'ringkasan');
            $table->renameColumn('isi_konten_old', 'isi_konten');
        });
    }
};
