@extends('layouts.app')

@section('title','Autos.io | Editar auto')

@section('content')
<h1>Editar auto</h1>
<form action="/auto_compra/{{$autocompra->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Modelo: 
        <input type="text" name="modelo" value="{{$autocompra->modelo}}" required>
    </label>
    <br>

    <label>
        Precio: 
        <input type="float" name="precio" value="{{$autocompra->precio}}" required>
    </label>
    <br>

    <label>
        Marca: 
        <input type="text" name="marca" value="{{$autocompra->marca}}" required>
    </label>
    <br>

    <label>
        Color: 
        <input type="text" name="color" value="{{$autocompra->color}}" required>
    </label>
    <br>

    <label>
        Estatus: 
        <input type="text" name="estatus" value="{{$autocompra->estatus}}" required>
    </label>
    <br>

    <label>
        Id_usuario1:
        <input type="number" name="id_usuario1" value="{{$autocompra->id_usuario1}}" required>
    </label>
    <br>

    <button type="submit">
        Actualizar auto
    </button>
</form>
@endsection