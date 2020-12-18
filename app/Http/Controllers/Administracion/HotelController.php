<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function getIndex(){
        return view('principal');
    }
    public function showHistoria(){
        return view('hotel.historia');
    }
    public function showMision(){
        return view('hotel.vision');
    }
    public function showUbicacion(){
        return view('hotel.ubicacion');
    }
    public function showContactos(){
        return view('contacto');
    }
}
