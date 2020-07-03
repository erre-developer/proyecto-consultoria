@extends('layout')


@section('content')

    <div class="idsection">

    </div>

    <!-- seccion card-->
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-12 text-center">
                <h1 class="display-4 miestilo text-primary pb-4">Certificaciones</h1>
            </div>
            <div class="card-deck">

                @foreach($cert as $itemCertificacion)

                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ $itemCertificacion->urlImg }}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{ $itemCertificacion->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-success btn-lg btn-block" href="{{ route('certificacion.show', $itemCertificacion) }}">Ver Información</a>
                        </div>
                    </div>
                    
                @endforeach
            </div><!-- fin div card-check-->
        </div>
    </div> <!-- fin div container-->

    <!-- fin seccion card-->


@endsection