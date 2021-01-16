<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\MHabitacion;

class HabitacionesController extends Controller
{
    //
    // public function showHabitaciones(){
    //     $habitaciones=DB::table('habitacion')
    //     ->join('precio','habitacion.precio','=','precio.idPrecio')
    //     ->orderBy('numero','asc')->get();  
       
    //     //$habitaciones=DB::table('habitacion')->get();
    //  	return view('servicios.habitaciones',['habitacion'=>$habitaciones]);
        
    // }
    public function showHabitaciones(){
        //consulta a trves de mModelos
        //$habitaciones = MHabitacion::all();
        //$habitaciones = MHabitacion::find(3);
        $habitaciones = MHabitacion::where('numCamas','like','2')->get();
     	return view('servicios.habitaciones',['habitacion'=>$habitaciones]);
        
    }
}
