<?php

namespace Database\Factories;

use App\Models\StudiLanjut;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudiLanjutFactory extends Factory
{
    protected $model = StudiLanjut::class;

    public function definition(): array
    {
        $universitas = [
            'UI',
            'STAN',
            'IPDN',
            'Poltekim',
        ];

        $kategori = [
            'TNI-Polri',
            'Kedinasan',
            'PTN',
            'PTLN',
            'PTS',
        ];

        return [
            'nama_alumni' => $this->faker->name(),

            'nama_lembaga' => [
                'id' => $this->faker->randomElement($universitas),
                'en' => $this->faker->randomElement($universitas),
            ],

            'kategori' => $this->faker->randomElement($kategori),

            'angkatan' => $this->faker->numberBetween(2018, 2025),
        ];
    }
}
