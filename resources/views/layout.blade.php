<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <title>Home</title>

        <style>
            .idsection{
                padding: 50px;
            }

            @media (max-width: 768px) {
                .miestilo {
                    text-align: center;
                }
            }

            @media (max-width: 425px) {
                .miestilo {
                    font-size: 40px;
                }
            }

            @media (max-width: 570px) {
                .miestilofooter {
                    text-align: center;
                }
            }
            
            .bg-prueba  {
                opacity: 0.9;
                transition: all 2s ease;

            }
            .bg-dark  {
                transition: all 2s ease;

            }

            #map {
                width: 90%; height: 400px; margin-top: 10px; margin-bottom: 10px;
                background-color: blueviolet
            }

    }
        </style>
    </head>
    <body>

        <div id="app" class="d-flex flex-column h-screen justify-content-between">

            <header>
                @include('partials.nav')
            </header>
        
            <main>
                @yield('content')
            </main>
            
            <footer class="bg-dark text-light shadow py-4 mt-4">
                <div class="container-fluid  pb-3">
                    <div class="row align-items-center">
                        <div class="text-center col-12 col-sm-6 col-md-6">
                            @foreach( $objeto as $item)
                            <a target="_blank" href="{{ $item->href }}">
                                <img class="imgfooter" src="{{ $item->src }}" alt="{{ $item->alt }}" width="40" height="40">
                            </a>
                            @endforeach
                        </div>
                        <div class="text-center miestilofooter col-12 col-sm-6 col-md-6 d-flex flex-column align-items-end ">
                            <a class="text-success" href="#nosotros">Nosotros</a>
                            <a class="text-success" href="#contacto">Contacto</a>
                            <a class="text-success" href="#servicio">Servicio</a>
                            <a class="text-success" href="#ubicacion">Ubicacion</a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-12 col-sm-6 col-md-6">
                            <h6>Consultoria <span class="text-primary">PMO</span> | Copyright © 2020</h6>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-md-6">
                            <h6 class="text-success">Desing By erre-developer</h6>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-md-6">
                            Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="js/app.js"></script>

        <script>
            function myMap() {
            var mapProp= {
              center:new google.maps.LatLng(51.508742,-0.120850),
              zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("map"),mapProp);
            }

        </script>
            
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


        <script>
            $(window).scroll(function(){
                if($("#menu").offset().top > 100){
                    $("#menu").addClass("bg-prueba");
                } else {
                    $("#menu").removeClass("bg-prueba");
                    $("#menu").addClass("bg-dark");
                }
            });
        </script>

    </body>
</html>