<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">Hotel La Rivera</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('hotel/historia')}}">Historia</a>
          <a class="dropdown-item" href="{{url('hotel/mision-vision')}}">Mision y Visión</a>
          <a class="dropdown-item" href="{{url('hotel/ubicacion')}}">Ubicación</a>       
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('servicios/habitaciones')}}">Habitaciones</a>
          <a class="dropdown-item" href="{{url('servicios/eventos/2')}}">Eventos</a>
          
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('clientes/visualizar')}}">Visualizar</a>
          
      </li>
      
      <li class="nav-item">
            <a class="nav-link" href="{{url('facturacion')}}">Facturacion</a>
      </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('reservas')}}">Reservas</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="{{url('contactenos')}}">Contactos</a>
        </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>