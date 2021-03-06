<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(CalleSeeder::class);
    }
}
