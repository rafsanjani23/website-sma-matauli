<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('video', function (Blueprint $table) {
            $table->json('judul_tmp')->nullable()->after('judul');
        });

        DB::table('video')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('video')->where('id', $row->id)->update([
                    'judul_tmp' => json_encode(['id' => $row->judul ?? '']),
                ]);
            }
        });

        Schema::table('video', function (Blueprint $table) {
            $table->dropColumn('judul');
        });

        Schema::table('video', function (Blueprint $table) {
            $table->renameColumn('judul_tmp', 'judul');
        });
    }

    public function down(): void
    {
        Schema::table('video', function (Blueprint $table) {
            $table->string('judul_old', 50)->nullable()->after('judul');
        });

        DB::table('video')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $j = json_decode($row->judul ?? '{}', true);
                DB::table('video')->where('id', $row->id)->update([
                    'judul_old' => $j['id'] ?? ($j['en'] ?? ''),
                ]);
            }
        });

        Schema::table('video', function (Blueprint $table) {
            $table->dropColumn('judul');
        });

        Schema::table('video', function (Blueprint $table) {
            $table->renameColumn('judul_old', 'judul');
        });
    }
};
