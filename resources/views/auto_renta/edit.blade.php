@extends('layouts.app')

@section('title','Autos.io | Editar auto')

@section('content')
<h1>Editar auto</h1>
<form action="/auto_renta/{{$autoventa->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Placa: 
        <input type="text" name="placa" value="{{$autoventa->placa}}" required>
    </label>
    <br>

    <label>
        Modelo: 
        <input type="text" name="modelo" value="{{$autoventa->modelo}}" required>
    </label>
    <br>

    <label>
        Precio: 
        <input type="float" name="precio" value="{{$autoventa->precio}}" required>
    </label>
    <br>

    <label>
        Marca: 
        <input type="text" name="marca" value="{{$autoventa->marca}}" required>
    </label>
    <br>

    <label>
        Color: 
        <input type="text" name="color" value="{{$autoventa->color}}" required>
    </label>
    <br>

    <label>
        Estatus: 
        <input type="text" name="estatus" value="{{$autoventa->estatus}}" required>
    </label>
    <br>

    <label>
        Id_usuario1:
        <input type="number" name="id_usuario1" value="{{$autoventa->id_usuario1}}" required>
    </label>
    <br>
    <button type="submit">
        Actualizar auto
    </button>
</form>
@endsection