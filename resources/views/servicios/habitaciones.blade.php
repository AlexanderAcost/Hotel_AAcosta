
@extends('principal')
@section('titulo')
<br>
<h1 style="text-align: center;margin-bottom: 30px;">Listado de Habitaciones</h1>
@stop
@section('pri')
    <br><br>
    <div class="container">    
    <div class="row">
    

    @foreach($habitacion as $p)
        
        <div class="col-md-6">

            <div class="card border-primary" >
                <img class="card-img-top" alt="..." height="400" src="{{url("/imagenes/$p->foto")}}" >
                <div class="card-header">
                    <h2 class="card-title">
                        Habitación {{$p->tipo}} 
                    </h2>
                    <h3>
                        Id: {{$p->Numero}}
                    </h3> 
                </div>
                <div class="card-body scroll" style="height: 200px;">
                    <h5 class="card-title">{{$p->descripcion}}</h5>
                    <h4 class="card-text">Camas: {{$p->numCamas}}</h4>
                                                                                     
                </div>
                <div class="card-footer bg-transparent" style="height: 70px;">
                    <h4 class="card-text">Precio: {{$p->precio}}</h4>
                    <a href="#" class="btn btn-primary" style="margin-top:-70px;margin-left:420px;">Reservar</a>
                </div> 
            </div><br>

        </div>
    @endforeach
    </div>
    </div> 
@stop
