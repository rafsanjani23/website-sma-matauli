<?php

namespace Database\Factories;

use App\Models\TenagaKependidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TenagaKependidikan>
 */
class TenagaKependidikanFactory extends Factory
{
    protected $model = TenagaKependidikan::class;
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jabatan' => 'Tenaga pendidik contoh',
            'foto' => 'public/assets/DUMMY.jpg', // bisa diganti nanti
        ];
    }
}
