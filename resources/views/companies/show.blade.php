<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Datos de la Compañia</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <table class="table table-striped table-bordered">
                <tr>
                    <td class="text-center" colspan="2"><strong>DATOS DE LA COMPAÑIA</strong></td>
                </tr>
                <thr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{ $companies->name }}</td>
                </thr>
                <tr>
                    <td><strong>DESCRIPCION</strong></td>
                    <td>{{ $companies->description }}</td>
                </tr>
                <tr>
                    <td><strong>NIT</strong></td>
                    <td>{{ $companies->nit }}</td>
                </tr>
                <tr>
                    <td><strong>TELEFONO</strong></td>
                    <td>{{ $companies->phone }}</td>
                </tr>
            </table>
            <a href="{{url('companies')}}">Volver al inicio</a>
        </div>
    </div>
</div>
</body>
</html>
