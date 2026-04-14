<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerandaProgramKemataulianSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('beranda_program_kemataulian')->updateOrInsert(
            ['judul' => 'Program Khusus Kemataulian'],
            [
                'ringkasan' => 'Program Khusus Kemataulian adalah program unggulan yang dirancang untuk membentuk karakter dan kepribadian siswa yang berakhlak mulia, disiplin, dan bertanggung jawab.',
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
