<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->updateOrInsert(
            ['username' => 'sman1mat'],
            [
                'password' => Hash::make('SMAMTN&m4t4UL1'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
