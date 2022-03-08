<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index_user.css">
    <link href="css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>BYNGO</title>
</head>
<body>
<div class="logo">
    <a href="{{ url('/welcome') }}"><img src="images/logo.png" id="logo"></a> 
</div>

<br><br>
<table style="position:relative; left:30px;">
    @foreach ($datos as $dato)
    <tr>
        <td>
            <div class="card" style="width: 18rem; height:30rem;">
            <img src="{{ asset('archivos/'. $dato->picuser) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $dato->nombre }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $dato->email }}</li>
                <li class="list-group-item">{{ $dato->tel }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('editar_user', ['id' => $dato->id]) }}" class="card-link">Editar información</a>
                <a href="{{ url('/welcome') }}" class="card-link">Salir</a>
            </div>
            </div>
        </td>
        <td>
            <div class="card" style="position:relative; left:30px; width: 60rem; height: 29rem;" id="inf_ped">
                <br>
                <div class="d-grid gap-2 d-md-block">
                    <button type="button" class="btn btn-success" style="position:relative; left:30px;">Historial pedidos</button>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<br>
<footer>
    <div id="foot"> </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>