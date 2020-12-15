<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('idReserva');
            $table->unsignedBigInteger('numero');
            $table->foreign('numero')->references('Numero')->on('habitacion');
            
            $table->unsignedBigInteger('cliente');
            $table->foreign('cliente')->references('idCliente')->on('cliente');
            
            $table->date('entrada');
            $table->date('salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
