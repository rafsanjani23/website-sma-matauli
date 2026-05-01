<?php

namespace Database\Seeders;

use App\Models\Pimpinan;
use Illuminate\Database\Seeder;

class PimpinanSeeder extends Seeder
{
    public function run(): void
    {
        $jabatan = [
            ['id' => 'Kepala Sekolah',    'en' => 'Principal'],
            ['id' => 'Wakasek Humas',     'en' => 'Vice Principal of Public Relations'],
            ['id' => 'Wakasek Kesiswaan', 'en' => 'Vice Principal of Student Affairs'],
            ['id' => 'Wakasek Kurikulum', 'en' => 'Vice Principal of Curriculum'],
            ['id' => 'Wakasek Sarpas',    'en' => 'Vice Principal of Facilities'],
            ['id' => 'Wakasek Asrama',    'en' => 'Vice Principal of Boarding'],
            ['id' => 'Sekretaris',        'en' => 'Secretary'],
        ];

        foreach ($jabatan as $index => $j) {
            Pimpinan::updateOrCreate(
                ['id' => $index + 1],
                [
                    'jabatan' => $j,
                    'nama' => '-',
                ]
            );
        }
    }
}
