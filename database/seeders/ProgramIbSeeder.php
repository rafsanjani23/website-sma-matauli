<?php

namespace Database\Seeders;

use App\Models\ProgramIb;
use Illuminate\Database\Seeder;

class ProgramIbSeeder extends Seeder
{
    public function run(): void
    {
        ProgramIb::updateOrCreate(
            ['id' => 1],
            [
                'judul' => [
                    'id' => 'Program IB',
                    'en' => 'IB Program',
                ],
                'gambar' => 'program-ib/default.jpg',
                'ringkasan' => [
                    'id' => 'Program IB (International Baccalaureate) adalah program pendidikan internasional yang dirancang untuk mengembangkan kemampuan intelektual, personal, emosional, dan sosial siswa.',
                    'en' => 'The IB (International Baccalaureate) Program is an international education program designed to develop students\' intellectual, personal, emotional, and social abilities.',
                ],
                'isi_konten' => [
                    'id' => 'Isi konten Program IB.',
                    'en' => 'IB Program content.',
                ],
                'gambar_opsional' => null,
            ]
        );
    }
}
