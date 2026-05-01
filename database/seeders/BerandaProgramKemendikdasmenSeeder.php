<?php

namespace Database\Seeders;

use App\Models\BerandaProgramKemendikdasmen;
use Illuminate\Database\Seeder;

class BerandaProgramKemendikdasmenSeeder extends Seeder
{
    public function run(): void
    {
        BerandaProgramKemendikdasmen::updateOrCreate(
            ['id' => 1],
            [
                'judul' => [
                    'id' => 'Program Kemendikdasmen',
                    'en' => 'Kemendikdasmen Program',
                ],
                'ringkasan' => [
                    'id' => 'Program Kemendikdasmen adalah program yang mengacu pada kebijakan Kementerian Pendidikan Dasar dan Menengah untuk meningkatkan mutu pendidikan dan mengembangkan potensi siswa secara optimal.',
                    'en' => 'The Kemendikdasmen Program follows the Ministry of Primary and Secondary Education\'s policy to improve education quality and develop students\' potential optimally.',
                ],
                'foto' => 'default.jpg',
            ]
        );
    }
}
