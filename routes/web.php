<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administracion\HotelController;
use App\Http\Controllers\Clientes\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ReservasController; 
use App\Http\Controllers\Consultas\consulta;


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

//             RUTAS  CLIENTE 
Route::get('clientes/visualizar',[ClientesController::class, 'showClientes']);

Route::get('clientes/formulario',[ClientesController::class, 'formulario']);
Route::POST('clientes/registro',[ClientesController::class, 'registro']);

Route::get('clientes/formbuscar',[ClientesController::class, 'formbuscar']);
Route::POST('clientes/buscar',[ClientesController::class, 'buscar']);


//               RUTA FACTURACION
Route::get('facturacion',[FacturacionController::class, 'getFactura']);



//raiz
Route::get('/',[HotelController::class, 'getIndex']);

//historia
Route::get('hotel/historia',[HotelController::class, 'showHistoria']);


//mision vision
Route::get('hotel/mision-vision',[HotelController::class, 'showMision']);


//ubicacion
Route::get('hotel/ubicacion',[HotelController::class, 'showUbicacion']);


//habitaciones
Route::get('servicios/habitaciones',[HabitacionesController::class, 'showHabitaciones']);

//eventos

Route::get('servicios/eventos/{id}', function ($id) {
    //return "Evento {$id}";
    return view('servicios.eventos',array ('id'=>$id));
});

//reservas
Route::get('reservas',[ReservasController::class, 'getReservas']);

//contactos
Route::get('contactenos',[HotelController::class, 'showContactos']);


//===========================Consultas
//primera
Route::get('consultas/primera',[consulta::class, 'primera'])->name('con_primera');

//segunda

Route::get('consultas/segunda',[consulta::class, 'segunda'])->name('con_segunda');
//tercera

Route::get('consultas/tercera',[consulta::class, 'tercera'])->name('con_tercera');
//cuarta
Route::get('consultas/cuarta',[consulta::class, 'cuarta'])->name('con_cuarta');
