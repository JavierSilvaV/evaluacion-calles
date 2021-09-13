<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia;
class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = new Provincia();
        $provincias->nombre = "Provincia de Cauquenes";
        $provincias->region_id = "1";
        $provincias->save();

        $provincias2 = new Provincia();
        $provincias2->nombre = "Provincia de Talca";
        $provincias2->region_id = "1";
        $provincias2->save();

        $provincias3 = new Provincia();
        $provincias3->nombre = "Provincia de Diguillín";
        $provincias3->region_id = "2";
        $provincias3->save();

        $provincias4 = new Provincia();
        $provincias4->nombre = "Provincia del Itata";
        $provincias4->region_id = "2";
        $provincias4->save();

        $provincias5 = new Provincia();

        $provincias5->nombre = "Provincia del Bio Bío";
        $provincias5->region_id = "3";

        $provincias5->save();

        $provincias6 = new Provincia();

        $provincias6->nombre = "Provincia de Concepción";
        $provincias6->region_id = "3";

        $provincias6->save();

        $provincias7 = new Provincia();

        $provincias7->nombre = "Provincia de Cautín";
        $provincias7->region_id = "4";

        $provincias7->save();

        $provincias8 = new Provincia();

        $provincias8->nombre = "Provincia de Malleco";
        $provincias8->region_id = "4";

        $provincias8->save();
    }
}
