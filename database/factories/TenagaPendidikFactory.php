<?php

namespace Database\Factories;

use App\Models\TenagaPendidik;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenagaPendidikFactory extends Factory
{
    protected $model = TenagaPendidik::class;
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'mata_pelajaran' => fake()->randomElement([
                'Matematika',
                'Bahasa Indonesia',
                'IPA',
                'IPS',
                'PJOK',
                'Agama',
            ]),
            'foto' => 'public/assets/DUMMY.jpg', // bisa diganti nanti
            'kategori' => 'Guru Mata Pelajaran',
        ];
    }
}
