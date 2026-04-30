<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramKemendikdasmen extends Seeder
{
    public function run(): void
    {
        DB::table('program_kemendikdasmen')->updateOrInsert(
            ['judul' => 'Program Kemendikdasmen'],
            [
                'gambar'         => 'program-kemendikdasmen/default.jpg',
                'deskripsi'      => 'Program SMA Unggulan dari Kemendikdasmen yang bertujuan mencetak generasi muda unggul, berkarakter, dan berdaya saing global.',
                'ringkasan'      => 'Program SMA Unggulan dari Kemendikdasmen yang bertujuan mencetak generasi muda unggul, berkarakter, dan berdaya saing global.',
                'isi_konten'     => 'Isi konten Program Kemendikdasmen.',
                'gambar_opsional' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
        );
    }
}
