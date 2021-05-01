<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Editar Compañia</title>
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
                    <form action="{{url('companies',$companies->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$companies->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description" id="description" value="{{$companies->description}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nit</label>
                            <input type="text" class="form-control" name="nit" id="nit" value="{{$companies->nit}}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$companies->phone}}">
                        </div>
                        <hr>
                        <button class="btn btn-primary " type="submit">Guardar Cambios</button>
                        <a href="{{url('companies')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>y
</body>
</html>
