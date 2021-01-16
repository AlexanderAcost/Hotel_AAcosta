@extends('master') 

@section('content')

<div class="container"> 
    <form action="{{url('clientes/registro')}}" method="POST">
        @csrf
        <br>
        <h1>Registro Clientes</h1>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="number" class="form-control" placeholder="DNI" id="dni" name="dni" aria-label="Username" aria-describedby="basic-addon1" required >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="masculino" value="1" required>
            <label class="form-check-label" for="masculino">M</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="femenino" value="2" required>
            <label class="form-check-label" for="femenino">F</label>
        </div> <br>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Domicilio" id="domicilio" name="domicilio" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="number" class="form-control" placeholder="Telefono" id="telefono" name="telefono" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="NombreFoto.jgp" id="foto" name="foto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <button type="submit" class="btn btn-success" onclick="return alerta()">Registrar</button>

    </form>
</div>

@stop