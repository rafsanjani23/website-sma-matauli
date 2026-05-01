<?php

namespace Database\Seeders;

use App\Models\ProgramKemataulian;
use Illuminate\Database\Seeder;

class ProgramKemataulianSeeder extends Seeder
{
    public function run(): void
    {
        ProgramKemataulian::updateOrCreate(
            ['id' => 1],
            [
                'judul' => [
                    'id' => 'Program Kemataulian',
                    'en' => 'Kemataulian Program',
                ],
                'gambar' => 'program-kemataulian/default.jpg',
                'deskripsi' => [
                    'id' => 'Program khusus Kemataulian yang dirancang untuk membentuk karakter siswa SMAN 1 Plus MATAULI Pandan dengan nilai-nilai kebangsaan dan keunggulan akademik.',
                    'en' => 'A special Kemataulian program designed to shape the character of SMAN 1 Plus MATAULI Pandan students with national values and academic excellence.',
                ],
                'ringkasan' => [
                    'id' => 'Program khusus Kemataulian yang dirancang untuk membentuk karakter siswa SMAN 1 Plus MATAULI Pandan dengan nilai-nilai kebangsaan dan keunggulan akademik.',
                    'en' => 'A special Kemataulian program designed to shape the character of SMAN 1 Plus MATAULI Pandan students with national values and academic excellence.',
                ],
                'isi_konten' => [
                    'id' => 'Isi konten Program Kemataulian.',
                    'en' => 'Kemataulian Program content.',
                ],
                'gambar_opsional' => null,
            ]
        );
    }
}
