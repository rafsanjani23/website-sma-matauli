<?php

namespace Database\Seeders;

use App\Models\BerandaProgramKemataulian;
use Illuminate\Database\Seeder;

class BerandaProgramKemataulianSeeder extends Seeder
{
    public function run(): void
    {
        BerandaProgramKemataulian::updateOrCreate(
            ['id' => 1],
            [
                'judul' => [
                    'id' => 'Program Khusus Kemataulian',
                    'en' => 'Kemataulian Special Program',
                ],
                'ringkasan' => [
                    'id' => 'Program Khusus Kemataulian adalah program unggulan yang dirancang untuk membentuk karakter dan kepribadian siswa yang berakhlak mulia, disiplin, dan bertanggung jawab.',
                    'en' => 'The Kemataulian Special Program is a flagship program designed to shape the character and personality of students who are noble, disciplined, and responsible.',
                ],
                'foto' => 'default.jpg',
            ]
        );
    }
}
