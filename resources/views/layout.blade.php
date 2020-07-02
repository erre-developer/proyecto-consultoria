<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js" defer></script>
    <title>Home</title>

    <style>
        .idsection{
            padding: 60px;
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
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-12 col-sm-6 col-md-6">
                        <h6>Consultoria <span class="text-primary">PMO</span> | CopyRight@2020</h6>
                    </div>
                    <div class="text-center col-12 col-sm-6 col-md-6">
                        <h6 class="text-success">Desing By erre-developer</h6>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>
    
</body>
</html>

