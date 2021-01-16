<?php

namespace App\Http\Controllers\Clientes;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mcliente;

class ClientesController extends Controller
{
    //
    public function showClientes(){
        //$clientes=DB::table('cliente')
        //->orderBy('nombres','asc')->get(); 
        $clientes=MCliente::all();
        return view('clientes.clientes',['cliente'=>$clientes]);
    }
    public function formulario(){
        return view('clientes.formularioRegistro');
    }
    public function registro(Request $request){
        //creamos una instancia del modelo que controla la tabla que queremos
        //
        $cliente=new MCliente(); 
        //con esta instancia ($cliente) puedo acceder a los atributos
        //y funciones de la clase que esta en el modelo 
        $cliente->DNI=$request->input('dni');
        $cliente->nombres=$request->input('nombre');
        $genero=$request->input('genero');
        if($genero == 1){
            $cliente->genero='M';
        }      
        else{
            $cliente->genero='F';
        }        
        $cliente->domicilio=$request->input('domicilio');
        $cliente->telefono=$request->input('telefono');
        $cliente->foto=$request->input('foto');
        $cliente->save();
        return redirect('clientes/visualizar');
    }

    public function formbuscar(){
        return view('clientes.formulariobuscar');
    }
    public function buscar(Request $request){
        $dni=$request->input('dni');
        $cliente=MCliente::where('DNI','like',$dni)->first();
        
        if($cliente){
            return view('clientes.resbuscar', compact('cliente'));
        }
        else{
            return view('clientes.mensaje');
        }
        return view('clientes.formularioRegistro');
    }

}
