@extends('master') 
@section('content') 
    <h2>Clientes</h2>

    <br><br>
    
    @foreach($cliente as $p)
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#c{{$p->DNI}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">{{$p->nombres}}</a>     
    </p>
    <div class="row">
        <div class="col-md-6">
            <div class="collapse multi-collapse" id="c{{$p->DNI}}">
                <div class="card card-body " >
                <pre>

    ID: {{$p->DNI}}
    Genero: {{$p->genero}}
    Domicilio: {{$p->domicilio}}
    Telefono: {{$p->telefono}}
                </pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="collapse multi-collapse " id="c{{$p->DNI}}">
                <div class="card card-body" style="width: 18rem;">
                <img class="card-img-top" alt="..." height="150" src="{{url("/imagenes/cliente/$p->foto")}}" >                
                </div>
            </div>
        </div>
    </div> 
    @endforeach
@stop