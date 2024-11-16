@extends('layouts.app')

@section('title','Autos.io | Usuario')

@section('content')
@include('sweetalert::alert')
    <h1 style="background-image: linear-gradient(to right, #1648cd, lightblue);color:white;">Usuarios registrados</h1>

    <a href="/usuario/create" class="btn btn-success">Nuevo usuario</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>NOMBRE</th> 
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>FECHA NACIMIENTO</th>
        <th>CORREO</th>
        <th>CONTRASENA</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($usuarios as $usuario)
            
            <tr>
                <td>
                    <h3>{{$usuario->id}}</h3> 
                </td>

                <td>
                    <h3>{{$usuario->nombre}}</h3> 
                </td>

                <td>
                    <h3>{{$usuario->apellido_paterno}}</h3> 
                </td>

                <td>
                    <h3>{{$usuario->apellido_materno}}</h3> 
                </td>

                <td>
                    <h3>{{$usuario->fecha_nacimiento}}</h3>
                </td>

                <td>
                    <h3>{{$usuario->correo}}</h3>
                </td>

                <td>
                    <h3>{{$usuario->contrasena}}</h3>
                </td>

                <td>
                    <button class="btn btn-primary"><a href="/usuario/{{$usuario->id}}" style="color: white; text-decoration:none">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-warning"><a href="/usuario/{{$usuario->id}}/editar" style="color: white; text-decoration:none">EDITAR</a></button>
                </td>
                <td>
                    <form action="/usuario/{{$usuario->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-danger">
                                ELIMINAR
                        </button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </table>

{{$usuarios->links()}}
@endsection