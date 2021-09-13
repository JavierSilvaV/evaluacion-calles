<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = new Region();

        $regions->nombre = "Región del Maule";
        $regions->save();
        $regions2 = new Region();

        $regions2->nombre = "Región de Ñuble";
        $regions2->save();

        $regions3 = new Region();
        $regions3->nombre = "Región del Bio Bío";
        $regions3->save();

        $regions4 = new Region();
        $regions4->nombre = "Región de la Araucanía";
        $regions4->save();
    }
}
