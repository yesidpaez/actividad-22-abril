<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Listado de Compañias</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <br>
            <a href="{{url('companies/create')}}" class="btn btn-primary">Crear Nueva Compañia</a>
            <a href="{{url('employees')}}" class="btn btn-primary">Ver Empleados</a>
            <br> <br>
            @if(session('status'))
                <div class="alert alert-success" role="alert">{{ session('status')}}</div>
                <div class="alert alert-warning" role="alert">{{ session('status')}}</div>
                <div class="alert alert-danger" role="alert">{{ session('status')}}</div>
            @endif






            </div>
            <br>
            <table class="table table-striped table-bordered" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COMPAÑIA</th>
                        <th>DESCRIPTION</th>
                        <th>NIT</th>
                        <th>PHONE</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>

                <tboddy>
                @foreach($companies as $companie)
                    <tr>
                        <td>{{ $companie->id }}</td>
                        <td>{{ $companie->name }}</td>
                        <td>{{ $companie->description }}</td>
                        <td>{{ $companie->nit }}</td>
                        <td>{{ $companie->phone }}</td>

                        <td>
                            <form action="{{url('companies',$companie->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{url('companies',$companie->id)}}"  class="btn btn-info btn-sf">Detalles</a>
                                <a href="{{url('companies/edit',$companie->id)}}"  class="btn btn-warning btn-sf">Editar</a>
                                <button type="submit" class="btn btn-danger btn-sm">  Eliminar </button>
                            </form>
                        </td>

                    </tr>

                    @endforeach
                </tboddy>

            </table>
            {{ $companies->links() }}
        </div>
    </div>
</div>
</body>
</html>


