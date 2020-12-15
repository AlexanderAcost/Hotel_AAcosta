<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    //
    public function showHabitaciones(){
        $habitaciones=DB::table('habitacion')
        ->join('precio','habitacion.precio','=','precio.idPrecio')
        ->orderBy('numero','asc')->get();  
       
        //$habitaciones=DB::table('habitacion')->get();
     	return view('servicios.habitaciones',['habitacion'=>$habitaciones]);
        
    }
}
