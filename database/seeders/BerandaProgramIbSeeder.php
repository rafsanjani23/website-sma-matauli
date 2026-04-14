<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerandaProgramIbSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('beranda_program_ib')->updateOrInsert(
            ['judul' => 'Program IB'],
            [
                'ringkasan' => 'Program IB (International Baccalaureate) adalah program pendidikan internasional yang dirancang untuk mengembangkan kemampuan intelektual, personal, emosional, dan sosial siswa.',
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
