<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('beranda_program_ib', function (Blueprint $table) {
            $table->json('judul_tmp')->nullable()->after('judul');
            $table->json('ringkasan_tmp')->nullable()->after('ringkasan');
        });

        DB::table('beranda_program_ib')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('beranda_program_ib')->where('id', $row->id)->update([
                    'judul_tmp'     => json_encode(['id' => $row->judul ?? '']),
                    'ringkasan_tmp' => json_encode(['id' => $row->ringkasan ?? '']),
                ]);
            }
        });

        Schema::table('beranda_program_ib', function (Blueprint $table) {
            $table->dropColumn(['judul', 'ringkasan']);
        });

        Schema::table('beranda_program_ib', function (Blueprint $table) {
            $table->renameColumn('judul_tmp', 'judul');
            $table->renameColumn('ringkasan_tmp', 'ringkasan');
        });
    }

    public function down(): void
    {
        Schema::table('beranda_program_ib', function (Blueprint $table) {
            $table->string('judul_old', 150)->nullable()->after('judul');
            $table->text('ringkasan_old')->nullable()->after('ringkasan');
        });

        DB::table('beranda_program_ib')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $j = json_decode($row->judul ?? '{}', true);
                $r = json_decode($row->ringkasan ?? '{}', true);

                DB::table('beranda_program_ib')->where('id', $row->id)->update([
                    'judul_old'     => $j['id'] ?? ($j['en'] ?? ''),
                    'ringkasan_old' => $r['id'] ?? ($r['en'] ?? ''),
                ]);
            }
        });

        Schema::table('beranda_program_ib', function (Blueprint $table) {
            $table->dropColumn(['judul', 'ringkasan']);
        });

        Schema::table('beranda_program_ib', function (Blueprint $table) {
            $table->renameColumn('judul_old', 'judul');
            $table->renameColumn('ringkasan_old', 'ringkasan');
        });
    }
};
