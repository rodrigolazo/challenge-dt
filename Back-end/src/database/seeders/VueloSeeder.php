<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos =[
            [
                'ciudadOrigen'=>'Quito',
                'ciudadDestino'=>'Bogota',
                'fechaIda'=>'2022-03-30',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'ciudadOrigen'=>'Guayaquil',
                'ciudadDestino'=>'Buenos Aires',
                'fechaIda'=>'2022-03-31',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'ciudadOrigen'=>'Quito',
                'ciudadDestino'=>'New York',
                'fechaIda'=>'2022-04-04',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'ciudadOrigen'=>'Quito',
                'ciudadDestino'=>'Los Angeles',
                'fechaIda'=>'2022-05-24',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'ciudadOrigen'=>'Guayaquil',
                'ciudadDestino'=>'Lima',
                'fechaIda'=>'2022-03-30',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'ciudadOrigen'=>'Quito',
                'ciudadDestino'=>'Madrid',
                'fechaIda'=>'2022-04-07',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'ciudadOrigen'=>'Guayaquil',
                'ciudadDestino'=>'Roma',
                'fechaIda'=>'2022-04-25',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
  
        ];
        DB::table('vuelos')->insert($datos);
    }
}
