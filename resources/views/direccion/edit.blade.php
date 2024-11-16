@extends('layouts.app')

@section('title','Autos.io | Editar direccion')

@section('content')
<h1>Editar direccion</h1>
<form action="/direccion/{{$direccion->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        num_exterior: 
        <input type="text" name="num_exterior" value="{{$direccion->num_exterior}}" required>
    </label>
    <br>

    <label>
        num_interior: 
        <input type="text" name="num_interior" value="{{$direccion->num_interior}}" required>
    </label>
    <br>

    <label>
        Calle: 
        <input type="text" name="calle" value="{{$direccion->calle}}" required>
    </label>
    <br>

    <label>
        Colonia: 
        <input type="text" name="colonia" value="{{$direccion->colonia}}" required>
    </label>
    <br>

    <label>
        Municipio: 
        <input type="text" name="municipio" value="{{$direccion->municipio}}" required>
    </label>
    <br>

    <label>
        Estado: 
        <input type="text" name="estado" value="{{$direccion->estado}}" required>
    </label>
    <br>

    <label>
        Pais: 
        <input type="text" name="pais" value="{{$direccion->pais}}" required>
    </label>
    <br>

    <label>
        Codigo_postal: 
        <input type="text" name="codigo_postal" value="{{$direccion->codigo_postal}}" required>
    </label>
    <br>

    <label>
        Id_usuario1:
        <input type="number" name="id_usuario1" value="{{$direccion->id_usuario1}}" required>
    </label>
    <br>
    <button type="submit">
        Actualizar direccion
    </button>
</form>
@endsection