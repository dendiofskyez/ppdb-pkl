<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RegencySeeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\RolesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            AdminSeeder::class,
            ProvinceSeeder::class,
            RegencySeeder::class,
            DistrictSeeder::class,
            VillageSeeder::class,
        ]);
    }
}