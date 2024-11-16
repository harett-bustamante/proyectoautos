@extends('layouts.app')

@section('title','Autos.io | Direccion')

@section('content')
@include('sweetalert::alert')
    <h1>Direcciones registradas</h1>

    <a href="/direccion/create" class="btn btn-success">Nueva direccion</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>NUM_EXTERIOR</th>
        <th>NUM_INTERIOR</th> 
        <th>CALLE</th>
        <th>COLONIA</th>
        <th>MUNICIPIO</th>
        <th>ESTADO</th>
        <th>PAIS</th>
        <th>CODIGO_POSTAL</th>
        <th>ID_USUARIO1</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($direcciones as $direccion)
            
            <tr>
                <td>
                    <h3>{{$direccion->id}}</h3> 
                </td>

                <td>
                    <h3>{{$direccion->num_exterior}}</h3> 
                </td>

                <td>
                    <h3>{{$direccion->num_interior}}</h3> 
                </td>

                <td>
                    <h3>{{$direccion->calle}}</h3> 
                </td>

                <td>
                    <h3>{{$direccion->colonia}}</h3> 
                </td>

                <td>
                    <h3>{{$direccion->municipio}}</h3>
                </td>

                <td>
                    <h3>{{$direccion->estado}}</h3>
                </td>

                <td>
                    <h3>{{$direccion->pais}}</h3>
                </td>

                <td>
                    <h3>{{$direccion->codigo_postal}}</h3>
                </td>

                <td>
                    <h3>{{$direccion->id_usuario1}}</h3>
                </td>

                <td>
                    <button class="btn btn-primary"><a href="/direccion/{{$direccion->id}}" style="color: white; text-decoration:none">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-warning"><a href="/direccion/{{$direccion->id}}/editar" style="color: white; text-decoration:none">EDITAR</a></button>
                </td>
                <td>
                    <form action="/direccion/{{$direccion->id}}" method="post">
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

{{$direcciones->links()}}
@endsection