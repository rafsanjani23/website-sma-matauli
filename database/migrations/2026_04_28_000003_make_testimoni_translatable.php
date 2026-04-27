<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('testimoni', function (Blueprint $table) {
            $table->json('isi_tmp')->nullable()->after('isi');
        });

        DB::table('testimoni')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('testimoni')->where('id', $row->id)->update([
                    'isi_tmp' => json_encode(['id' => $row->isi ?? '']),
                ]);
            }
        });

        Schema::table('testimoni', function (Blueprint $table) {
            $table->dropColumn('isi');
        });

        Schema::table('testimoni', function (Blueprint $table) {
            $table->renameColumn('isi_tmp', 'isi');
        });
    }

    public function down(): void
    {
        Schema::table('testimoni', function (Blueprint $table) {
            $table->text('isi_old')->nullable()->after('isi');
        });

        DB::table('testimoni')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $i = json_decode($row->isi ?? '{}', true);
                DB::table('testimoni')->where('id', $row->id)->update([
                    'isi_old' => $i['id'] ?? ($i['en'] ?? ''),
                ]);
            }
        });

        Schema::table('testimoni', function (Blueprint $table) {
            $table->dropColumn('isi');
        });

        Schema::table('testimoni', function (Blueprint $table) {
            $table->renameColumn('isi_old', 'isi');
        });
    }
};
