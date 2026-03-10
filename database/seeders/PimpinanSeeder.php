<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PimpinanSeeder extends Seeder
{
    public function run(): void
    {
        $jabatan = [
            'Kepala Sekolah',
            'Wakasek Humas',
            'Wakasek Kesiswaan',
            'Wakasek Kurikulum',
            'Wakasek Sarpas',
            'Wakasek Asrama',
            'Sekretaris',
        ];

        foreach ($jabatan as $j) {
            DB::table('pimpinan')->updateOrInsert(
                ['jabatan' => $j],
                [
                    'nama' => '-',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
