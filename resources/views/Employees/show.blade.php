<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Datos de Empleados</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <table class="table table-striped table-bordered">
                <tr>
                    <td class="text-center" colspan="2"><strong>DATOS DEL EMPLEADO</strong></td>
                </tr>
                <thr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{ $employees->name }}</td>
                </thr>
                <tr>
                    <td><strong>APELLIDO</strong></td>
                    <td>{{ $employees->lastname }}</td>
                </tr>
                <tr>
                    <td><strong>EMAIL</strong></td>
                    <td>{{ $employees->email }}</td>
                </tr>
                <tr>
                    <td><strong>DOCUMENTO</strong></td>
                    <td>{{ $employees->document }}</td>
                </tr>
                <tr>
                    <td><strong>GENERO</strong></td>
                    <td>{{ $employees->gender }}</td>
                </tr>
            </table>
            <a href="{{url('employees')}}">Volver al inicio</a>
        </div>
    </div>
</div>
</body>
</html>
