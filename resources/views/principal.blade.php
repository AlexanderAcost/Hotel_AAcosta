@extends('master') 
@section('content')
    @yield('titulo')
 <div class="container" style="margin-top: 50px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('imagenes/p0.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3>Bienvenido</h3>
                <p>El Mas Comodo Hotel De La Ciudad</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('imagenes/p1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3>Disfruta</h3>
                <p>Aprovecha ya.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('imagenes/p4.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3>Relajate</h3>
                <p>Prueba Algo Nuevo.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('imagenes/p3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3>Descansa</h3>
                <p>Como En La Comodida De Casa.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">siguiente</span>
        </a>
    </div>
</div>
    
    @yield('pri')

@stop
