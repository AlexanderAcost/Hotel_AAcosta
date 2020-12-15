<?php

namespace App\Http\Controllers\Clientes;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function showClientes(){
        $clientes=DB::table('cliente')
        ->orderBy('nombres','asc')->get(); 
        return view('clientes.clientes',['cliente'=>$clientes]);
    }
}
