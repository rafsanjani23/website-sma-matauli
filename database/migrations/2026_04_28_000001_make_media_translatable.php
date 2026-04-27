<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->json('judul_tmp')->nullable()->after('judul');
            $table->json('ringkasan_tmp')->nullable()->after('ringkasan');
            $table->json('isi_tmp')->nullable()->after('isi');
        });

        DB::table('media')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('media')->where('id', $row->id)->update([
                    'judul_tmp'     => json_encode(['id' => $row->judul ?? '']),
                    'ringkasan_tmp' => json_encode(['id' => $row->ringkasan ?? '']),
                    'isi_tmp'       => json_encode(['id' => $row->isi ?? '']),
                ]);
            }
        });

        Schema::table('media', function (Blueprint $table) {
            $table->dropColumn(['judul', 'ringkasan', 'isi']);
        });

        Schema::table('media', function (Blueprint $table) {
            $table->renameColumn('judul_tmp', 'judul');
            $table->renameColumn('ringkasan_tmp', 'ringkasan');
            $table->renameColumn('isi_tmp', 'isi');
        });
    }

    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('judul_old', 50)->nullable()->after('judul');
            $table->text('ringkasan_old')->nullable()->after('ringkasan');
            $table->text('isi_old')->nullable()->after('isi');
        });

        DB::table('media')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $judul     = json_decode($row->judul ?? '{}', true);
                $ringkasan = json_decode($row->ringkasan ?? '{}', true);
                $isi       = json_decode($row->isi ?? '{}', true);

                DB::table('media')->where('id', $row->id)->update([
                    'judul_old'     => $judul['id'] ?? ($judul['en'] ?? ''),
                    'ringkasan_old' => $ringkasan['id'] ?? ($ringkasan['en'] ?? ''),
                    'isi_old'       => $isi['id'] ?? ($isi['en'] ?? ''),
                ]);
            }
        });

        Schema::table('media', function (Blueprint $table) {
            $table->dropColumn(['judul', 'ringkasan', 'isi']);
        });

        Schema::table('media', function (Blueprint $table) {
            $table->renameColumn('judul_old', 'judul');
            $table->renameColumn('ringkasan_old', 'ringkasan');
            $table->renameColumn('isi_old', 'isi');
        });
    }
};
