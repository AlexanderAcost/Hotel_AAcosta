@extends('master') 

@section('content') 
    <h2 style="text-align: center;">Listado Clientes</h2>

    <br><br>
    <div class="container">
        
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Información</th>
              </tr>
            </thead>
            @foreach($cliente as $p)
            <tbody>
                
              <tr>
                <th scope="row">{{$p->DNI}}</th>
                <td>{{$p->nombres}}</td>
                <td>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#c{{$p->DNI}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Más</a>     
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="collapse multi-collapse" id="c{{$p->DNI}}">
                                <div class="card card-body " >
                                    <h6 style="color: black;">Genero: {{$p->genero}}</h6>
                                    <h6 style="color: black;">Domicilio: {{$p->domicilio}}</h6>
                                    <h6 style="color: black;">Telefono: {{$p->telefono}}</h6>
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

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        
    </div>
    
@stop

