<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Arreglo para insertar los datos en la tabla*/
        $niveles=['PRIMERO','SEGUNDO','TERCERO','CUARTO','QUINTO'];
        foreach($niveles as $nivel){
            DB::table('nivels') -> insert([
                'nombre' => $nivel
            ]);
        }
    }
}
