<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Drivers</title>
</head>

<body>
    <div class="container">
    <br>
    <center><h3>Repartidores registrados</h3></center>
    <br>

    <center>
    <table class="table table-striped table-hover">
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDO PATERNO</th>
            <th>APELLIDO MATERNO</th>
            <th>TELÉFONO</th>
            <th>CORREO ELECTRÓNICO</th>
            <th>OTROS</th>
        </tr>
        
        @foreach ($datos as $dato)
        <tr>
            <td>{{ $dato->nombre }}</td>
            <td>{{ $dato->app }}</td>
            <td>{{ $dato->apm }}</td>
            <td>{{ $dato->tel }}</td>
            <td>{{ $dato->email }}</td>
            <td>
                <a href="{{ route('informacion', ['id' => $dato->id]) }}">INFORMACIÓN DETALLADA</a><br>
                <a href="{{ route('editar', ['id' => $dato->id]) }}">EDITAR</a><br>
                <form name="borrar" action="{{ route('borrar', ['id' => $dato->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Borrar" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach

	</table>
    </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>