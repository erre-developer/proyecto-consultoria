<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light shadow py-4 fixed-top">

    <div class="container">
        <a class="navbar-brand text-white" href="#home">
            <h3>Consultoria <span class="text-primary">PMO</span></h3>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#home">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#servicio">Servicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#contacto">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Ubicación</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Certificaciones
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item disable"  href="#">Certificaciones</a>
                <a class="dropdown-item disable"  href="#">Certificaciones</a>
            </div>
            </li>
            
        </ul>
        @guest
                <form class="form-inline my-2 my-lg-0">
                    @csrf
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                </form>
                @else 
                <form class="form-inline my-2 my-lg-0">
                    @csrf
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Salir</button>
                </form>
            @endguest
        
        </div>
    </div>
  </nav>