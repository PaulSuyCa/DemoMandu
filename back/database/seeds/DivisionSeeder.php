<?php

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisiones')->truncate();
        DB::table('divisiones')->insert([
            'nombre' => 'CEO',
            'Dsup_id'=>null,
            'nombre_Dsup'=>null,
            'num_subd'=>2,
            'nivel'=>1,
            'cantidad'=>1,
            'embajador'=>"David Lopez",
            'estado'=>1
        ]);
        DB::table('divisiones')->insert([
            'nombre' => 'Direccion General',
            'Dsup_id'=>1,
            'nombre_Dsup'=>"CEO",
            'num_subd'=>2,
            'nivel'=>2,
            'cantidad'=>3,
            'embajador'=>"Luis Lopez",
            'estado'=>1
        ]);
        DB::table('divisiones')->insert([
            'nombre' => 'Division de Marketing',
            'Dsup_id'=>1,
            'nombre_Dsup'=>"CEO",
            'num_subd'=>2,
            'nivel'=>2,
            'cantidad'=>2,
            'embajador'=>"Maria Lopez",
            'estado'=>1
        ]);
        DB::table('divisiones')->insert([
            'nombre' => 'Produccion',
            'Dsup_id'=>3,
            'nombre_Dsup'=>"Division de Marketing",
            'num_subd'=>0,
            'nivel'=>3,
            'cantidad'=>10,
            'embajador'=>"Cesar Lopez",
            'estado'=>1
        ]);
        DB::table('divisiones')->insert([
            'nombre' => 'Diseño',
            'Dsup_id'=>3,
            'nombre_Dsup'=>"Division de Marketing",
            'num_subd'=>0,
            'nivel'=>3,
            'cantidad'=>10,
            'embajador'=>"Luna Lopez",
            'estado'=>1
        ]);
    }
}
