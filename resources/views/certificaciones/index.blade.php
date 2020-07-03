@extends('layout')


@section('content')

    <div class="idsection">

    </div>

    <div class="container">
        <h1 class="display-4 miestilo text-primary ">Certificaciones</h1>
        <div class="d-flex flex-wrap">
            @foreach($cert as $itemCert)
                <div class="card d-flex flex-column justify-content-between ml-2">
                    <img src="./images/tarjetaFormacion.png" alt="Responsive image" class="card-img-top"> 
                    <div class="card-body">
                        <h4 class="card-title">{{ $itemCert->title }}</h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">{{ $itemCert->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success btn-lg" href=" {{ route('certificacion.show', $itemCert) }}">Ver Información</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection