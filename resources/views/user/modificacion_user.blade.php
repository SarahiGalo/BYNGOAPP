<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Modificación</title>
    </head>

    <body>
        <div class="container">
            <br>
            <center><h3>Modificación de tu información</h3></center>
            <br>

            <div class="card mb-3" style="max-width: 1000px;">
            <h5 class="card-header">Información del usuario</h5>
            <div class="card-body">
                <form action="{{ route('guardar_user',['id' => $users->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                    <table>
                        <tr>
                            <td><b>Nombre: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="nombre" value="{{ $users->nombre }}"></td>
                        </tr>
                        <tr>
                            <td><b>Apellido paterno: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="app" value="{{ $users->app }}"></td>
                        </tr>
                        <tr>
                            <td><b>Apellido materno: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="apm" value="{{ $users->apm }}"></td>
                        </tr>
                        <tr>
                            <td><b> Calle: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="calle" value="{{ $users->calle }}"></td>
                        </tr>
                        <tr>
                            <td><b> Colonia: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="colonia" value="{{ $users->colonia }}"></td>
                        </tr>
                        <tr>
                            <td><b>Municipio: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="municipio" value="{{ $users->municipio }}"></td>
                        </tr>
                        <tr>
                            <td><b>Número de casa: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="numc" value="{{ $users->numc }}"></td>
                        </tr>
                        <tr>
                            <td><b>Delegación: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="del" value="{{ $users->del }}"></td>
                        </tr>
                        <tr>
                            <td><b>Telefóno: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="tel" value="{{ $users->tel }}"></td>
                        </tr>
                        <tr>
                            <td><b>Correo electrónico: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="email" value="{{ $users->email }}"></td>
                        </tr>
                        <tr>
                            <td><b>Confirma correo electrónico: </b></td>
                            <td><input type="text" class="form-control form-control-sm" name="email2" value="{{ $users->email2 }}"></td>
                        </tr>
                        <tr>
                            <td><b>Contraseña: </b></td>
                            <td><input type="password" class="form-control form-control-sm" name="pass1" value="{{ $users->pass1 }}"></td>
                        </tr>
                        <tr>
                            <td><b>Repite contraseña: </b></td>
                            <td><input type="password" class="form-control form-control-sm" name="pass2" value="{{ $users->pass2 }}"></td>
                        </tr>
                        <tr>
                            <td><b>Fotografía: </b></td>
                            <td>
                                <input type="file" class="form-control form-control-sm" name="picuser">
                                <input type="text" class="form-control form-control-sm" name="picuser2" value="{{ $users->picuser }}" readonly>    
                            </td>
                        </tr>
                        <tr>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <td colspan="2"><br>
                                <input type="Submit" class="btn btn-success" value="Guardar">
                                    <a href="{{ route('index_user')}}" class="btn btn-primary">
                                        Regresar
                                    </a>
                            </td>
                            </div>
                        </tr>
                    </table> 
                </form>
            </div>
        </div>
    </body>
</html>