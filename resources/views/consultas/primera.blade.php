@extends('principal')
@section('content')
<div class="container"> 
    <h1 style="text-align: center;margin-bottom: 30px;">Listado de Habitaciones</h1>
      
    <div class="row">
    @foreach($primera as $p)
 
        <div class="col-md-6">

            <div class="card border-primary" >
                
                <div class="card-header">
                    <h2 class="card-title">
                        Numero: {{$p->numero}} 
                    </h2>
                    <h3>
                        Habitación {{$p->tipo}}
                    </h3> 
                </div>
                
                <div class="card-footer bg-transparent" style="height: 70px;">
                    <h4 class="card-text">Precio: {{$p->precio}}</h4>
                    
                </div> 
            </div><br>

        </div>
    @endforeach
    </div>
    </div> 
@stop