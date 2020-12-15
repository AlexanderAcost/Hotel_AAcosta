<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $habitaciones=[
            [
             'descripcion'=>'Habitación Sencilla con wifi gratuita, Ducha, Aire acondicionado, y TV por cable ',
             'numCamas'=>'1', 
             'foto'=>'sencilla.jpg', 
             'precio'=>'1'
            ],
            [
             'descripcion'=>'Habitacion Doble con WiFi Gratuita, Ducha, Caja fuerte, Aire acondicionado, Secador de pelo, Plancha para ropa, Escritorio, Artículos de aseo gratis,TV de pantalla plana',
             'numCamas'=>'2', 
             'foto'=>'doble.jpg', 
             'precio'=>'2'
            ],
            [
             'descripcion'=>'Habitacion Matrimonial con con una decoración moderna con tonos agradables y vistosos',
             'numCamas'=>'1', 
             'foto'=>'matrimonial.jpg', 
             'precio'=>'3'
            ],
            [
             'descripcion'=>'Habitacion Suite con wifi gratuita,baño privado, TV por cable y un salón con zona de estar y de comedor.',
             'numCamas'=>'1', 
             'foto'=>'suite.jpg', 
             'precio'=>'4'
            ],
            [
             'descripcion'=>'Habitacion King con un total de 26 m² de superficie y están configuradas para dar alojamiento a 1 ó 2 huéspedes.',
             'numCamas'=>'2', 
             'foto'=>'king.jpg', 
             'precio'=>'5'
            ]
        ];
        DB::table('habitacion')->insert($habitaciones);
    }
}
