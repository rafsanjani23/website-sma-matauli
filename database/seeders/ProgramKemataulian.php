<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramKemataulian extends Seeder
{
    public function run(): void
    {
        DB::table('program_kemataulian')->updateOrInsert(
            ['judul' => 'Program Kemataulian'],
            [
                'gambar'         => 'program-kemataulian/default.jpg',
                'deskripsi'      => 'Program khusus Kemataulian yang dirancang untuk membentuk karakter siswa SMAN 1 Plus MATAULI Pandan dengan nilai-nilai kebangsaan dan keunggulan akademik.',
                'ringkasan'      => 'Program khusus Kemataulian yang dirancang untuk membentuk karakter siswa SMAN 1 Plus MATAULI Pandan dengan nilai-nilai kebangsaan dan keunggulan akademik.',
                'isi_konten'     => 'Isi konten Program Kemataulian.',
                'gambar_opsional' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
        );
    }
}
