<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Información_driver</title>
    </head>

    <body>
        <div class="container">
            <br>
            <center><h2>Información</h2></center>
            <br>
            <table class="table table-hover">
                <tr>
                    <td><b> Fotografía: </b></td>
                    <td colspan="2"><img src="{{ asset('archivos/'. $driver->picrep) }}" width="150" alt="imagen"></td>
                </tr>
                <tr>
                    <td><b> Nombre completo: </b></td>
                    <td>{{ $driver->nombre }} {{ $driver->app }} {{ $driver->apm }}</td>
                </tr>
                <tr>
                    <td><b> Domicilio: </b></td>
                    <td>{{ $driver->calle }} {{ $driver->numc }}, {{ $driver->colonia }}, {{ $driver->municipio }}</td>
                </tr>
                <tr>
                    <td><b> Correo electrónico: </b></td>
                    <td>{{ $driver->email }}</td>
                </tr>
                <tr>
                    <td><b> Telefóno: </b></td>
                    <td>{{ $driver->tel }}</td>
                </tr>
                <tr>
                    <td><b> CURP: </b></td>
                    <td>{{ $driver->curp }}</td>
                </tr>
                <tr>
                    <td><b> No. de licencia: </b></td>
                    <td>{{ $driver->licencia }}</td>
                </tr>
                <tr>
                    <td><b> Fotografía licencia: </b></td>
                    <td colspan="2"><img src="{{ asset('archivos/'. $driver->piclicen) }}" width="150" alt="imagen"></td></td>
                </tr>
                <tr>
                    <td><b> Tipo de transporte: </b></td>
                    <td>{{ $driver->transporte }}</td>
                </tr>
            </table>

            <center>
            <table>
                <tr>
                    <td colspan="2">
                        <a href="{{ route('index_driver') }}">
                            <button class="btn btn-primary">Regresar</button>
                        </a>
                    </td>
                <tr>
            </table>
            </center>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    </body>
</html>