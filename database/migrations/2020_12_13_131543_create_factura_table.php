<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('codigoF');
            
            $table->unsignedBigInteger('numero');
            $table->foreign('numero')->references('Numero')->on('habitacion');
            $table->unsignedBigInteger('cliente');
            $table->foreign('cliente')->references('idCliente')->on('cliente');
            $table->unsignedBigInteger('formapago');
            $table->foreign('formapago')->references('idPago')->on('formaPago');
            
            $table->date('entrada');
            $table->date('salida');
            $table->float('total');
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
        Schema::dropIfExists('factura');
    }
}
