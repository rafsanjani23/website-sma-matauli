<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->json('jabatan_tmp')->nullable()->after('jabatan');
        });

        DB::table('tenaga_kependidikan')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('tenaga_kependidikan')->where('id', $row->id)->update([
                    'jabatan_tmp' => json_encode(['id' => $row->jabatan ?? '']),
                ]);
            }
        });

        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->dropColumn('jabatan');
        });

        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->renameColumn('jabatan_tmp', 'jabatan');
        });
    }

    public function down(): void
    {
        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->string('jabatan_old', 50)->nullable()->after('jabatan');
        });

        DB::table('tenaga_kependidikan')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $j = json_decode($row->jabatan ?? '{}', true);
                DB::table('tenaga_kependidikan')->where('id', $row->id)->update([
                    'jabatan_old' => $j['id'] ?? ($j['en'] ?? ''),
                ]);
            }
        });

        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->dropColumn('jabatan');
        });

        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->renameColumn('jabatan_old', 'jabatan');
        });
    }
};
