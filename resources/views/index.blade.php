<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>BYNGO</title>
</head>
<body>
<div class="logo">
    <a href="{{ url('/welcome') }}"><img src="images/logo.png" id="logo"></a> 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/index') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Inicia Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ url('/register1') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
</div>

<br><br>
  <h2>¡TODO DESDE TU DISPOSITIVO MOVIL!</h2><br>
  <h5>PAQUETERÍA SEGURA Y AL INSTANTE.
  <h6>Con BYNGO no esperes las sorpresas, <br> nosotros nos encargamos de eso.</h6><br>
  <img src="images/desingmovil.png" alt="Códiog QR de BYNGO" id="image"><br><br>
    <div id="foot"> 
    </div>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>