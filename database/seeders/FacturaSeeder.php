<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $facturas=[
            ['numero'=>'1',
            'cliente'=>'5',
            'formapago'=>'1',
            'entrada'=>'2020-01-01',
            'salida'=>'2020-01-30',
            'total'=>'1'
            ],
            ['numero'=>'2',
            'cliente'=>'5',
            'formapago'=>'2',
            'entrada'=>'2020-02-01',
            'salida'=>'2020-02-28',
            'total'=>'2'
            ],
            ['numero'=>'2',
            'cliente'=>'4',
            'formapago'=>'2',
            'entrada'=>'2020-03-01',
            'salida'=>'2020-03-05',
            'total'=>'2'
            ],
            ['numero'=>'4',
            'cliente'=>'4',
            'formapago'=>'3',
            'entrada'=>'2020-04-01',
            'salida'=>'2020-04-06',
            'total'=>'4'
            ],
            ['numero'=>'5',
            'cliente'=>'4',
            'formapago'=>'3',
            'entrada'=>'2020-06-01',
            'salida'=>'2020-06-09',
            'total'=>'5'
            ],
            ['numero'=>'5',
            'cliente'=>'1',
            'formapago'=>'1',
            'entrada'=>'2020-01-01',
            'salida'=>'2020-01-01',
            'total'=>'5'
            ],
            
            

        ];
        DB::table('factura')->insert($facturas);
    }
}
