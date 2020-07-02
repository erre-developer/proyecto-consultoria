@extends('layout')

@section('content')


<div class="idsection" id="home">

</div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6">
                <h1 class="display-4 miestilo text-primary ">Quienes Somos</h1>
                <p class="text-justify">Nuestra misión es aportar valor en el desarrollo de las empresas , de cualquier tamaño, mediante el uso de las tecnologías de la información en todos los procesos productivos. Contribuyendo a la generación de riquezas de la empresa y al crecimiento de sus colaboradores y el país.</p>
                <p class="text-justify">Esta página es un canal de comunicación con todos aquellos interesados en conocer los servicios que ofrecemos en la gestión Integral de Proyectos, la capacitación, Entrenamiento y Gestión de Procesos También un canal de información de temas y noticias relevantes relacionados con la gestión de proyectos. Por último un espacio para el intercambio de ideas y/o debates en torno a las TIC.</p>
                <a class="btn btn-lg btn-block btn-outline-primary my-4" href="">Contactanos</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid my-4" src="/img/home1.svg" alt="Home ">
            </div>
        </div>
    </div>

    <div class="idsection" id="servicio">

    </div>

    <div class="container">
        <div class="d-flex flex-wrap flex-row-reverse">
            <div class="col-12 text-center">
                <h1 class="display-4 miestilo text-primary pb-4">Servicios</h1>
            </div>
            <div class="card-deck">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top" src="/img/plan.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top" src="/img/gestion.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top" src="/img/gestion.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top" src="/img/plan.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
         
    </div>
    <div class="idsection" id="contacto">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 miestilo text-primary pb-4">Contacto</h1>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <form class="bg-light py-2 px-3" method="POST" action="">
                    @csrf

                    <div class="form-group">
                        <h5 class="text-success" for="name">Nombre</h5>
                        <input class="form-control bg-light shadow-sm @error('name') is-invalid @else  border-0 @enderror" type="text" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <h5 class="text-success" for="email">Email</h5>
                        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else  border-0 @enderror" type="email" id="email" name="email" placeholder="Email..." value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <h5 class="text-success" for="subject">asunto</h5>
                        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else  border-0 @enderror" type="text" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <h5 class="text-success" for="content">Contenido</h5>
                        <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else  border-0 @enderror"  rows="5" name="content" placeholder="contenido ....">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <button class="btn btn-outline-success btn-lg btn-block">Enviar</button>
                </form>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">

            </div>
        </div>
    </div>

@endsection

<div class="card-footer">

</div>