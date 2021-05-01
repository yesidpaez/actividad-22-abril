<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Crear Nuevo Empleado</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                Formulario de registro
                </div>
                <div class="panel-body">
                    <form action="{{url('employees')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="nit" id="nit">
                        </div>
                        <div class="form-group">
                            <label for="">Documento</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="">Genero</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>


                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">Left</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">Middle</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">Right</button>
                            </div>
                        </div>


                        <hr>
                            <button class="btn btn-primary " type="submit">Guardar Nuevo Empleado</button>
                        <a href="{{url('employees')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>y
</body>
</html>
