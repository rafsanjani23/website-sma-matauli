<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->json('mata_pelajaran_tmp')->nullable()->after('mata_pelajaran');
        });

        DB::table('tenaga_pendidik')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                DB::table('tenaga_pendidik')->where('id', $row->id)->update([
                    'mata_pelajaran_tmp' => json_encode(['id' => $row->mata_pelajaran ?? '']),
                ]);
            }
        });

        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->dropColumn('mata_pelajaran');
        });

        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->renameColumn('mata_pelajaran_tmp', 'mata_pelajaran');
        });
    }

    public function down(): void
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->string('mata_pelajaran_old', 50)->nullable()->after('mata_pelajaran');
        });

        DB::table('tenaga_pendidik')->orderBy('id')->chunk(100, function ($rows) {
            foreach ($rows as $row) {
                $m = json_decode($row->mata_pelajaran ?? '{}', true);
                DB::table('tenaga_pendidik')->where('id', $row->id)->update([
                    'mata_pelajaran_old' => $m['id'] ?? ($m['en'] ?? ''),
                ]);
            }
        });

        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->dropColumn('mata_pelajaran');
        });

        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->renameColumn('mata_pelajaran_old', 'mata_pelajaran');
        });
    }
};
