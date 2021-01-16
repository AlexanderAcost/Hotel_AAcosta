@extends('master') 

@section('content')
<div class="container">
    <form action="{{url('clientes/buscar')}}" method="POST">
    @csrf
    <br>
        <h1>Buscar Clientes</h1>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="number" class="form-control" placeholder="DNI" id="dni" name="dni" aria-label="Username" aria-describedby="basic-addon1" required >
        </div>

        <button type="submit" class="btn btn-success" onclick="return alerta()">Buscar</button>
    </form>
</div>
@stop