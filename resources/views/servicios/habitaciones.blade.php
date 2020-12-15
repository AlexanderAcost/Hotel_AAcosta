@extends('master') 
@section('content') 
    <br><br>
    <h1>Habitaciones Hotel A.Costa</h1>
    <br><br>

    <!--<?php//dd($habitacion);?> -->
       
    <div class="row">
    @foreach($habitacion as $p)
 
        <div class="col-md-6">

            <div class="card border-primary" >
                <img class="card-img-top" alt="..." height="400" src="{{url("/imagenes/$p->foto")}}" >
                <div class="card-header">
                    <h5 class="card-title">Tipo: {{$p->tipo}} </h5>Id: {{$p->Numero}}
                </div>
                <div class="card-body scroll">
                    <h5 class="card-title">{{$p->descripcion}}</h5>
                    <p class="card-text">Camas: {{$p->numCamas}}</p>
                    <p class="card-text">Precio: {{$p->precio}}</p>                                                                 
                </div>
                <div class="card-footer bg-transparent ">
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div> 
            </div><br>

        </div>
    @endforeach
    </div>
   
@stop