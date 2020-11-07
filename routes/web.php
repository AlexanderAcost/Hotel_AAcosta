<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//raiz
Route::get('/', function () {
    //return "Bienvenidos al hotel rivera";
    return view('master');
});
//historia
Route::get('hotel/historia', function () {
    //return "Creado en 2011";
    return view('hotel.historia');
});
//mision vision
Route::get('hotel/mision-vision', function () {
    //return "Mision y Vision";
    return view('hotel.vision');
});
//ubicacion
Route::get('hotel/ubicacion', function () {
    //return "Ubicado eb Cartagena de Indias";
    return view('hotel.ubicacion');
});
//habitaciones
Route::get('servicios/habitaciones', function () {
    //return "Habitaciones tipo Estandar,Superior,Ejecutiva,Suite";
    return view('servicios.habitaciones');
});
//eventos
Route::get('servicios/eventos/{id}', function ($id) {
    //return "Evento {$id}";
    return view('servicios.eventos',array ('id'=>$id));
});
//reservas
Route::get('reservas', function () {
    //return "Reservas";
    return view('reservas.reservas');
});
//contactos
Route::get('contactenos', function () {
    //return "Contactos";
    return view('contacto');
});

