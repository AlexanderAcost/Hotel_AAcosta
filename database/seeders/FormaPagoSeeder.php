<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pagos=[
            ['descripcion'=>'efectivo'
            ],
            ['descripcion'=>'tarjeta debito'
            ],
            ['descripcion'=>'tarjeta credito'
            ]
            
        ];
        DB::table('formapago')->insert($pagos);
    }
}
