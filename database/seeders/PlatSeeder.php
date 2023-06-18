<?php

namespace Database\Seeders;

use App\Models\Plat;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Plat::factory()
        ->count(30)->create();
    }
}
