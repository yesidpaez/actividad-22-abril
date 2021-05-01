<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Listado de Empleados</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <br>
            <a href="{{url('employees/create')}}" class="btn btn-primary">Crear Nuevo Empleado</a>
            <a href="{{url('companies')}}" class="btn btn-primary">Ver Compañias</a>
            <br> <br>
            <table class="table table-striped table-bordered" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>LASTNAME</th>
                        <th>EMAIL</th>
                        <th>DOCUMENT</th>
                        <th>GENDER</th>
                        <th>OPCIONES</th>

                    </tr>
                </thead>

                <tboddy>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->document }}</td>
                            <td>{{ $employee->gender }}</td>

                            <td>
                                <form action="{{url('employees',$employee->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{url('companies',$employee->id)}}"  class="btn btn-info btn-sf">Detalles</a>
                                    <a href="{{url('companies/edit',$employee->id)}}"  class="btn btn-warning btn-sf">Editar</a>
                                    <button type="submit" class="btn btn-danger btn-sm">  Eliminar </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tboddy>

            </table>
            {{ $employees->links() }}
        </div>
    </div>
</div>
</body>
</html>


