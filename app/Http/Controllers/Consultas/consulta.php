<?php

namespace App\Http\Controllers\Consultas;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class consulta extends Controller
{
    //
    public function primera(){
        $primera=DB::table('habitacion')
        ->select('habitacion.numero','precio.tipo','precio.precio')
        ->join('precio','habitacion.precio','=','precio.idPrecio')
        ->join('factura','habitacion.numero','=','factura.numero')
        ->where('salida', '=', null)
        ->get();  
       
        
     	return view('consultas.primera',['primera'=>$primera]);
    }
    /*
    public function segunda(){

        $segunda=DB::table('cliente')
            ->select('cliente.DNI', 'cliente.nombres')
            ->from(function ($uno){
                $uno->selectRaw('select cliente.DNI,cliente.nombres count(factura.cliente) as total')
                    ->from('cliente')
                    ->join('factura','factura.cliente', '=', 'cliente.idCliente')
                    ->groupBy('factura.cliente');
            })
                    
        ->get();
        return view('consultas.segunda',['segunda'=>$segunda]);

    }*/
    public function tercera(){
        $tercera=DB::table('factura')
        ->select('cliente.DNI','cliente.nombres','cliente.genero','tipo','precio.precio')
        ->join('cliente','factura.cliente','=','cliente.idCliente')
        ->join('habitacion','factura.numero','=','habitacion.Numero')
        ->join('precio','habitacion.precio','=','precio.idprecio')
        ->where(function ($query) {
            $query->where('tipo', '=', 'Sencilla')
                  ->orWhere('tipo', '=', 'Doble');
        })
        ->get();  
       
        
     	return view('consultas.tercera',['tercera'=>$tercera]);
    }
    public function cuarta(){
        $cuarta=DB::table('habitacion')
        ->select('precio.tipo')
        ->selectRaw('count(habitacion.precio) as total')
        ->join('precio','habitacion.precio','=','precio.idPrecio')
        ->groupBy('habitacion.precio')

        ->get();
        return view('consultas.cuarta',['cuarta'=>$cuarta]);

    }
}
