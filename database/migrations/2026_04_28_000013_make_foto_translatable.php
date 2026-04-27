<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('foto', function (Blueprint $table) {
            $table->json('judul_tmp')->nullable()->after('judul');
            $table->json('deskripsi_tmp')->nullable()->after('deskripsi');
        });

        DB::table('foto')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('foto')->where('id', $row->id)->update([
                    'judul_tmp'     => json_encode(['id' => $row->judul ?? '']),
                    'deskripsi_tmp' => json_encode(['id' => $row->deskripsi ?? '']),
                ]);
            }
        });

        Schema::table('foto', function (Blueprint $table) {
            $table->dropColumn(['judul', 'deskripsi']);
        });

        Schema::table('foto', function (Blueprint $table) {
            $table->renameColumn('judul_tmp', 'judul');
            $table->renameColumn('deskripsi_tmp', 'deskripsi');
        });
    }

    public function down(): void
    {
        Schema::table('foto', function (Blueprint $table) {
            $table->string('judul_old', 50)->nullable()->after('judul');
            $table->text('deskripsi_old')->nullable()->after('deskripsi');
        });

        DB::table('foto')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $j = json_decode($row->judul ?? '{}', true);
                $d = json_decode($row->deskripsi ?? '{}', true);

                DB::table('foto')->where('id', $row->id)->update([
                    'judul_old'     => $j['id'] ?? ($j['en'] ?? ''),
                    'deskripsi_old' => $d['id'] ?? ($d['en'] ?? ''),
                ]);
            }
        });

        Schema::table('foto', function (Blueprint $table) {
            $table->dropColumn(['judul', 'deskripsi']);
        });

        Schema::table('foto', function (Blueprint $table) {
            $table->renameColumn('judul_old', 'judul');
            $table->renameColumn('deskripsi_old', 'deskripsi');
        });
    }
};
