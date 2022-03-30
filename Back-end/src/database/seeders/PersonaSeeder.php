<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
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
                'nombre'=>'Michael Rodriguez',
                'fechaNacimiento'=>'1997-05-17',
                'telefono'=>'0985478231',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nombre'=>'Pedro Lopez',
                'fechaNacimiento'=>'1998-07-28',
                'telefono'=>'0885377823',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nombre'=>'Arturo Mijares',
                'fechaNacimiento'=>'2000-04-07',
                'telefono'=>'0788547823',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nombre'=>'Erick Davalos',
                'fechaNacimiento'=>'1997-10-27',
                'telefono'=>'098547823',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nombre'=>'Angela Vimos',
                'fechaNacimiento'=>'1991-05-17',
                'telefono'=>'0905487963',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nombre'=>'Martha Jimenez',
                'fechaNacimiento'=>'1998-09-24',
                'telefono'=>'0785245963',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'nombre'=>'Pacifico Parra',
                'fechaNacimiento'=>'1985-07-23',
                'telefono'=>'0852145783',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]
        ];
        DB::table('personas')->insert($datos);
    }
}
