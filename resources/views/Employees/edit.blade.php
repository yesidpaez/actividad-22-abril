<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Editar Empleado</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Formulario de actualizacion
                </div>
                <div class="panel-body">
                    <form action="{{url('employees',$employees->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$employees->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="description" id="description" value="{{$employees->lastname}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="nit" id="nit" value="{{$employees->email}}">
                        </div>
                        <div class="form-group">
                            <label for="">Documento</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$employees->document}}">
                        </div>
                        <div class="form-group">
                            <label for="">Genero</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$employees->gender}}">
                        </div>
                        <hr>
                        <button class="btn btn-primary " type="submit">Guardar Cambios</button>
                        <a href="{{url('employees')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
