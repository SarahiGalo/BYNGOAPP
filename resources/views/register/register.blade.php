<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
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
  <div>
      <h1>Crea una cuenta <br> ¡TÚ ELIGES LO QUE QUIERES SER! </h1>
      <br><br>
      <table>
          <tr>
              <td><a href="{{ url('driver/registro') }}"><img class="alineado" id="images" src="images/delivery.jpg"></a><h3>Socio repartidor</h3></td>
              <td><a href="{{ url('user/registro_user') }}"><img class="alineado" id="images" src="images/delivery_user.png"></a><h3>Usuario</h3></td>
       </tr>
      </table>
  </div>
  <br><br>
  
  <footer>
    <div id="foot"></div>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>