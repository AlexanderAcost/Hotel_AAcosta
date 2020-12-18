@extends('principal')
@section('content')

<div class="container"> 
    <h1 style="text-align: center;margin-bottom: 30px;">Listado de Clientes</h1>
      
    <div class="row">
    @foreach($cuarta as $p)
        <div class="col-md-6">
            <div class="card border-primary" >
                <div class="card-header">
                    <h3>
                        Habitación {{$p->tipo}}
                    </h3>    
                </div>
                <div class="card-footer bg-transparent" style="height: 70px;">
                <h3>
                        Cantidad: {{$p->total}}
                </h3>   
                </div> 
            </div><br>

        </div>
    @endforeach
    </div>
    </div> 
@stop