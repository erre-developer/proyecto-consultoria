<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form enctype="multipart/form-data" method="post" action="{{route('rutaprueba')}}">
            @csrf
            <label for="titulo">Titulo</label><br>
            <input type="text" name="title" placeholder="Ingrece titulo de pagina...">
            <br>

            <label for="imagen">Subir Imagen</label>
            <input type="file" name="pdf">
            <br><br>
            
                
            <button type="submit"  >ENVIAR</button>
        </form>
            
    </div>
    
</body>
</html>