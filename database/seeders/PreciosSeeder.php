<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $precios=[
            ['tipo'=>'Sencilla',
            'precio'=>'20000',
            ],
            ['tipo'=>'Doble',
            'precio'=>'40000',
            ],
            ['tipo'=>'Matrimonial',
            'precio'=>'50000',
            ],
            ['tipo'=>'Suite',
            'precio'=>'60000',
            ],
            ['tipo'=>'King',
            'precio'=>'80000',
            ]
        ];
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        DB::table('precio')->insert($precios);
        //DB::table('precio')->truncate();
    }
}
