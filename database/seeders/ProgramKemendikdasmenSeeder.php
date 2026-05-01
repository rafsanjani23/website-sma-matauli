<?php

namespace Database\Seeders;

use App\Models\ProgramKemendikdasmen;
use Illuminate\Database\Seeder;

class ProgramKemendikdasmenSeeder extends Seeder
{
    public function run(): void
    {
        ProgramKemendikdasmen::updateOrCreate(
            ['id' => 1],
            [
                'judul' => [
                    'id' => 'Program Kemendikdasmen',
                    'en' => 'Kemendikdasmen Program',
                ],
                'gambar' => 'program-kemendikdasmen/default.jpg',
                'deskripsi' => [
                    'id' => 'Program SMA Unggulan dari Kemendikdasmen yang bertujuan mencetak generasi muda unggul, berkarakter, dan berdaya saing global.',
                    'en' => 'A flagship high school program from Kemendikdasmen aimed at producing outstanding, character-driven, and globally competitive young generations.',
                ],
                'ringkasan' => [
                    'id' => 'Program SMA Unggulan dari Kemendikdasmen yang bertujuan mencetak generasi muda unggul, berkarakter, dan berdaya saing global.',
                    'en' => 'A flagship high school program from Kemendikdasmen aimed at producing outstanding, character-driven, and globally competitive young generations.',
                ],
                'isi_konten' => [
                    'id' => 'Isi konten Program Kemendikdasmen.',
                    'en' => 'Kemendikdasmen Program content.',
                ],
                'gambar_opsional' => null,
            ]
        );
    }
}
