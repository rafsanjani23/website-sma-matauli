<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramIB extends Seeder
{
    public function run(): void
    {
        DB::table('program_ib')->updateOrInsert(
            ['judul' => 'Program IB'],
            [
                'gambar'         => 'program-ib/default.jpg',
                'ringkasan'      => 'Program IB (International Baccalaureate) adalah program pendidikan internasional yang dirancang untuk mengembangkan kemampuan intelektual, personal, emosional, dan sosial siswa.',
                'isi_konten'     => 'Isi konten Program IB.',
                'gambar_opsional' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
        );
    }
}
