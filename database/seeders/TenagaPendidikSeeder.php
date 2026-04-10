<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TenagaPendidik;
use Database\Factories\TenagaPendidikFactory;

class TenagaPendidikSeeder extends Seeder
{
    public function run(): void
    {
        TenagaPendidik::factory()->count(50)->create();

    }
}
