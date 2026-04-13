<?php

namespace Database\Seeders;

use App\Models\Pengasuh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengasuhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengasuh::factory()->count(50)->create();
    }
}
