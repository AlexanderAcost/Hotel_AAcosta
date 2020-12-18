@extends('principal')
@section('content')
<div class="container"> 
    <h1 style="text-align: center;margin-bottom: 30px;">Listado de Clientes</h1>
      
    <div class="row">
    @foreach($tercera as $p)
 
        <div class="col-md-6">

            <div class="card border-primary" >
                
                <div class="card-header">
                    <h2 class="card-title">
                        DNI {{$p->DNI}} 
                    </h2>
                    <h3>
                        Nombre: {{$p->nombres}}
                    </h3>
                    <h3>
                        Genero: {{$p->genero}}
                    </h3> 
                    <h3>
                        Tipo: {{$p->tipo}}
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