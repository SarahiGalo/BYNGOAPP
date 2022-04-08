<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/index_user.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>BYNGO</title>

</head>

<body>
    
<div class="logo">
    <a href="{{ url('/welcome') }}"><img src="{{asset('images/logo.png')}}" id="logo"></a> 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/index') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Inicia Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
</div>

    <br>
    <div class="container-fluid"> 
        <div id="mycontainer" class="container">
        <div class="card">
            <div class="card-header"> Registro </div>
            <div class="card-body">
                <form id="form_one" action="{{url('driver/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <h4>Datos del Repartidor</h4>

                    <div class="mb-2 row">
                        <label for="nombre" class="col-sm-4 col-form-label"><b> Nombre: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="app" class="col-sm-4 col-form-label"><b> Apellido Paterno: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="app" id="app">
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="apm" class="col-sm-4 col-form-label"><b> Apellido Materno: </b></label>  
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="apm" id="apm">
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="calle" class="col-sm-4 col-form-label"><b> Calle: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="calle" id="calle">
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="colonia" class="col-sm-4 col-form-label"><b> Colonia: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="colonia" id="colonia">
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="municipio" class="col-sm-4 col-form-label"><b> Municipio: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="municipio" id="municipio">
                        </div>
                    </div>
                    
                    <div class="mb-2 row">
                        <label for="numc" class="col-sm-4 col-form-label"><b> Número de casa: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="numc" id="numc">
                        </div>   
                    </div>
                    
                    <div class="mb-2 row">
                        <label for="del" class="col-sm-4 col-form-label"><b> Delegación: </b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="del" id="del">
                        </div>   
                    </div>
                    
                    <div class="mb-2 row">
                        <label for="tel" class="col-sm-4 col-form-label"><b> Teléfono: </b></label> 
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tel" id="tel">
                        </div>  
                    </div>

                    <div class="mb-2 row">
                        <label for="email" class="col-sm-4 col-form-label"><b> Correo electrónico: </b></label> 
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email">
                        </div>  
                    </div>
                    
                    <div class="mb-2 row">
                        <label for="email2" class="col-sm-4 col-form-label"><b> Verifica tu correo electrónico: </b></label> 
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email2" id="email2">
                        </div>  
                    </div>
                    
                    <div class="mb-2 row">
                        <label for="contrasena" class="col-sm-4 col-form-label"><b> Contraseña: </b></label> 
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="pass1" id="pass1">
                        </div>  
                    </div>
                    
                    <div class="mb-2 row">
                        <label for="contrasena2" class="col-sm-4 col-form-label"><b> Repite tu contraseña: </b></label> 
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="pass2" id="pass2">
                        </div>  
                    </div>

                    <h4 class="card-title">Datos de movilidad</h4>
                    <div class="mb-2 row">
                        <label for="curp" class="col-sm-4 col-form-label"><b> CURP: </b></label> 
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="curp" id="curp">
                        </div>  
                    </div>

                    <div class="mb-2 row">
                        <label for="licencia" class="col-sm-4 col-form-label"><b> N° Licencia: </b></label> 
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="licencia" id="licencia">
                        </div>  
                    </div>
                   
                    <div class="mb-2 row">
                        <label for="piclicen" class="col-sm-4 col-form-label"><b> Fotogría Licencia: </b></label> 
                        <div class="col-sm-8">
                            <input type="file" class="form-control form-control-sm" name="piclicen" id="piclicen">
                        </div>  
                    </div>

                    <div class="mb-2 row">
                        <label for="" class="col-sm-4 col-form-label"><b> Método de transporte </b></label> 
                        <div class="col-sm-8">
                            <select class="form-select" name="transporte"> 
                                <option value="0"> Selecciona una opción </option>   
                                <option value="Motocicleta"> Motocicleta </option>
                                <option value="Automóvil"> Automóvil </option>
                                <option value="Camioneta"> Camioneta </option>
                                <option value="Bicicleta"> Bicicleta </option>
                            </select>
                        </div>  
                    </div>
                    
                    <h4 class="card-title">Fotografía</h4>
                    <div class="mb-2 row">
                        <label for="picrep" class="col-sm-4 col-form-label"><b> Fotografía del Repartidor: </b></label> 
                        <div class="col-sm-8">
                            <input type="file" class="form-control form-control-sm" name="picrep" id="picrep">
                        </div>  
                    </div>
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <input type="Submit" value="Guardar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <br><br>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('js/vloginr.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>