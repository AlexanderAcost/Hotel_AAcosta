<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $clientes=[
            ['DNI'=>'1001',
            'nombres'=>'Alexander Gabriel Acosta ',
            'genero'=>'M',
            'domicilio'=>'Barrio Obrero',
            'telefono'=>'3205926652',
            'foto'=>'alexander.jpg'
            ],
            ['DNI'=>'1002',
            'nombres'=>'David Hernan Acosta',
            'genero'=>'M',
            'domicilio'=>'Barrio Villareal',
            'telefono'=>'3106787642',
            'foto'=>'david.jpg'
            ],
            ['DNI'=>'1003',
            'nombres'=>'Mayra Alejandra Casanova',
            'genero'=>'F',
            'domicilio'=>'Barrio Puenes',
            'telefono'=>'3120956543',
            'foto'=>'mayra.jpg'
            ],
            ['DNI'=>'1004',
            'nombres'=>'Diana Marcela Reina',
            'genero'=>'F',
            'domicilio'=>'Barrio Eden',
            'telefono'=>'3116548778',
            'foto'=>'diana.jpg'
            ],
            ['DNI'=>'1005',
            'nombres'=>'Cristian Alexander Benitez',
            'genero'=>'M',
            'domicilio'=>'Barrio Montecarlo',
            'telefono'=>'3142341325',
            'foto'=>'cristian.jpg'
            ]
        ];
        DB::table('cliente')->insert($clientes);
    }
}
