<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerandaProgramKemendikdasmenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('beranda_program_kemendikdasmen')->updateOrInsert(
            ['judul' => 'Program Kemendikdasmen'],
            [
                'ringkasan' => 'Program Kemendikdasmen adalah program yang mengacu pada kebijakan Kementerian Pendidikan Dasar dan Menengah untuk meningkatkan mutu pendidikan dan mengembangkan potensi siswa secara optimal.',
                'foto' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
