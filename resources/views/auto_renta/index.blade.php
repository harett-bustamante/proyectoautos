@extends('layouts.app')

@section('title','Autos.io | AutoVenta')

@section('content')
@include('sweetalert::alert')
    <h1>Autos registrados</h1>

    <a href="/auto_renta/create" class="btn btn-success">Nuevo auto</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>PLACA</th>
        <th>MODELO</th> 
        <th>PRECIO</th>
        <th>MARCA</th>
        <th>COLOR</th>
        <th>ESTATUS</th>
        <th>ID_USUARIO1</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($autoventas as $autoventa)
            
            <tr>
                <td>
                    <h3>{{$autoventa->id}}</h3> 
                </td>

                <td>
                    <h3>{{$autoventa->placa}}</h3> 
                </td>

                <td>
                    <h3>{{$autoventa->modelo}}</h3> 
                </td>

                <td>
                    <h3>{{$autoventa->precio}}</h3> 
                </td>

                <td>
                    <h3>{{$autoventa->marca}}</h3> 
                </td>

                <td>
                    <h3>{{$autoventa->color}}</h3>
                </td>

                <td>
                    <h3>{{$autoventa->estatus}}</h3>
                </td>

                <td>
                    <h3>{{$autoventa->id_usuario1}}</h3>
                </td>

                <td>
                    <button class="btn btn-primary"><a href="/auto_renta/{{$autoventa->id}}" style="color: white; text-decoration:none">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-warning"><a href="/auto_renta/{{$autoventa->id}}/editar" style="color: white; text-decoration:none">EDITAR</a></button>
                </td>
                <td>
                    <form action="/auto_renta/{{$autoventa->id}}" method="post">
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

{{$autoventas->links()}}
@endsection