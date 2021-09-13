<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciudad;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudads = new Ciudad();
        $ciudads->nombre = "Cauquenes";
        $ciudads->provincia_id = "1";
        $ciudads->save();

        $ciudads2 = new Ciudad();
        $ciudads2->nombre = "Chanco";
        $ciudads2->provincia_id = "1";
        $ciudads2->save();

        $ciudads3 = new Ciudad();
        $ciudads3->nombre = "Pelluhue";
        $ciudads3->provincia_id = "1";
        $ciudads3->save();

        $ciudads4 = new Ciudad();
        $ciudads4->nombre = "Constitución";
        $ciudads4->provincia_id = "2";
        $ciudads4->save();

        $ciudads5 = new Ciudad();

        $ciudads5->nombre = "Maule";
        $ciudads5->provincia_id = "2";

        $ciudads5->save();

        $ciudads6 = new Ciudad();

        $ciudads6->nombre = "Talca";
        $ciudads6->provincia_id = "2";

        $ciudads6->save();

        $ciudads7 = new Ciudad();

        $ciudads7->nombre = "Bulnes";
        $ciudads7->provincia_id = "3";

        $ciudads7->save();

        $ciudads8 = new Ciudad();

        $ciudads8->nombre = "Chillán";
        $ciudads8->provincia_id = "3";

        $ciudads8->save();

        $ciudads9 = new Ciudad();

        $ciudads9->nombre = "San Ignacio";
        $ciudads9->provincia_id = "3";

        $ciudads9->save();

        $ciudads10 = new Ciudad();

        $ciudads10->nombre = "Coelemu";
        $ciudads10->provincia_id = "4";

        $ciudads10->save();

        $ciudads11 = new Ciudad();

        $ciudads11->nombre = "Quirihue";
        $ciudads11->provincia_id = "4";

        $ciudads11->save();

        $ciudads12 = new Ciudad();

        $ciudads12->nombre = "Treguaco";
        $ciudads12->provincia_id = "4";

        $ciudads12->save();

        $ciudads13 = new Ciudad();

        $ciudads13->nombre = "Los Ángeles";
        $ciudads13->provincia_id = "5";

        $ciudads13->save();

        $ciudads14 = new Ciudad();

        $ciudads14->nombre = "Mulchén";
        $ciudads14->provincia_id = "5";

        $ciudads14->save();

        $ciudads15 = new Ciudad();

        $ciudads15->nombre = "Yumbel";
        $ciudads15->provincia_id = "5";

        $ciudads15->save();

        $ciudads16 = new Ciudad();

        $ciudads16->nombre = "Concepción";
        $ciudads16->provincia_id = "6";

        $ciudads16->save();

        $ciudads17 = new Ciudad();

        $ciudads17->nombre = "Florida";
        $ciudads17->provincia_id = "6";

        $ciudads17->save();

        $ciudads18 = new Ciudad();

        $ciudads18->nombre = "Tomé";
        $ciudads18->provincia_id = "6";

        $ciudads18->save();

        $ciudads19 = new Ciudad();

        $ciudads19->nombre = "Temuco";
        $ciudads19->provincia_id = "7";

        $ciudads19->save();

        $ciudads20 = new Ciudad();

        $ciudads20->nombre = "Pucón";
        $ciudads20->provincia_id = "7";

        $ciudads20->save();

        $ciudads21 = new Ciudad();

        $ciudads21->nombre = "Villarrica";
        $ciudads21->provincia_id = "7";

        $ciudads21->save();

        $ciudads22 = new Ciudad();

        $ciudads22->nombre = "Angol";
        $ciudads22->provincia_id = "8";

        $ciudads22->save();

        $ciudads23 = new Ciudad();

        $ciudads23->nombre = "Collipulli";
        $ciudads23->provincia_id = "8";

        $ciudads23->save();

        $ciudads24 = new Ciudad();

        $ciudads24->nombre = "Victoria";
        $ciudads24->provincia_id = "8";

        $ciudads24->save();
    }
}
