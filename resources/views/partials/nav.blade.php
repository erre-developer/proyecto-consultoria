<nav  id="menu" class="navbar navbar-expand-lg navbar-light text-light shadow py-3 fixed-top navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand text-white" href="home">
            <h3>Consultoria <span class="text-primary">PMO</span></h3>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="home#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="home#servicio">Servicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="home#contacto">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="home#contacto">Ubicación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('certificacion.index') }}">Certificaciones</a>
            </li>
            
        </ul>
            @guest
                <a class="nav-link btn btn-outline-success my-2 my-sm-0" href="{{ route('login') }}">
                    Login 
                </a>

                @else 
                <form class="form-inline my-2 my-lg-0">
                    @csrf
                    <a class="nav-link btn btn-outline-success my-2 my-sm-0" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Cerrar Sesion
                    </a>
                </form>
            @endguest
        
        </div>
    </div>
  </nav>
  
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>