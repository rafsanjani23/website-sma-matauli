<?php

namespace Database\Factories;

use App\Models\Pengasuh;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengasuh>
 */
class PengasuhFactory extends Factory
{
   protected $model = Pengasuh::class;
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'foto' => 'public/assets/DUMMY.jpg',
        ];
    }
}
