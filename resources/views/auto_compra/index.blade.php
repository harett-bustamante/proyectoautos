@extends('layouts.app')

@section('title','Autos.io | AutoCompra')

@section('content')
@include('sweetalert::alert')
    <h1>Autos registrados</h1>

    <a href="/auto_compra/create" class="btn btn-success">Nuevo auto</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
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

        @foreach ($auto_compras as $auto_compra)
            
            <tr>
                <td>
                    <h3>{{$auto_compra->id}}</h3> 
                </td>

                <td>
                    <h3>{{$auto_compra->modelo}}</h3> 
                </td>

                <td>
                    <h3>{{$auto_compra->precio}}</h3> 
                </td>

                <td>
                    <h3>{{$auto_compra->marca}}</h3> 
                </td>

                <td>
                    <h3>{{$auto_compra->color}}</h3>
                </td>

                <td>
                    <h3>{{$auto_compra->estatus}}</h3>
                </td>

                <td>
                    <h3>{{$auto_compra->id_usuario1}}</h3>
                </td>

                <td>
                    <button class="btn btn-primary"><a href="/auto_compra/{{$auto_compra->id}}" style="color: white; text-decoration:none">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-warning"><a href="/auto_compra/{{$auto_compra->id}}/editar" style="color: white; text-decoration:none">EDITAR</a></button>
                </td>
                <td>
                    <form action="/auto_compra/{{$auto_compra->id}}" method="post">
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

{{$auto_compras->links()}}
@endsection