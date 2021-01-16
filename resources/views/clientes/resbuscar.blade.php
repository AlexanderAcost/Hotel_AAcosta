@extends('master') 

@section('content') 
    <h2>Lista Buscar</h2>
    <br>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Información</th>
                </tr>
            </thead>
            <tbody>
                <th scope="row">{{$cliente->DNI}}</th>
                <td>{{$cliente->nombres}}</td>
                <td>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#c{{$cliente->DNI}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Más</a>     
                    </p>        
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="collapse multi-collapse" id="c{{$cliente->DNI}}">
                                <div class="card card-body " >
                                    <h6 style="color: black;">Genero: {{$cliente->genero}}</h6>
                                    <h6 style="color: black;">Domicilio: {{$cliente->domicilio}}</h6>
                                    <h6 style="color: black;">Telefono: {{$cliente->telefono}}</h6>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="collapse multi-collapse " id="c{{$cliente->DNI}}">
                                <div class="card card-body" style="width: 18rem;">
                                <img class="card-img-top" alt="..." height="150" src="{{url("/imagenes/cliente/$cliente->foto")}}" >                
                                </div>
                            </div>
                        </div>
                    </div>  
                </td>    
            </tbody>
        
        </table>
    </div>
    <br>
    <a href="{{url('clientes/formbuscar')}}">regresar</a>

@stop
