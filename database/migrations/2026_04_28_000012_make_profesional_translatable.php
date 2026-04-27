<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('profesional', function (Blueprint $table) {
            $table->json('nama_lembaga_tmp')->nullable()->after('nama_lembaga');
        });

        DB::table('profesional')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('profesional')->where('id', $row->id)->update([
                    'nama_lembaga_tmp' => json_encode(['id' => $row->nama_lembaga ?? '']),
                ]);
            }
        });

        Schema::table('profesional', function (Blueprint $table) {
            $table->dropColumn('nama_lembaga');
        });

        Schema::table('profesional', function (Blueprint $table) {
            $table->renameColumn('nama_lembaga_tmp', 'nama_lembaga');
        });
    }

    public function down(): void
    {
        Schema::table('profesional', function (Blueprint $table) {
            $table->string('nama_lembaga_old', 50)->nullable()->after('nama_lembaga');
        });

        DB::table('profesional')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $n = json_decode($row->nama_lembaga ?? '{}', true);
                DB::table('profesional')->where('id', $row->id)->update([
                    'nama_lembaga_old' => $n['id'] ?? ($n['en'] ?? ''),
                ]);
            }
        });

        Schema::table('profesional', function (Blueprint $table) {
            $table->dropColumn('nama_lembaga');
        });

        Schema::table('profesional', function (Blueprint $table) {
            $table->renameColumn('nama_lembaga_old', 'nama_lembaga');
        });
    }
};
