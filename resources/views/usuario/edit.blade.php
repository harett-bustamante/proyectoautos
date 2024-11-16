@extends('layouts.app')

@section('title','Autos.io | Editar usuario')

@section('content')
<h1>Editar usuario</h1>
<form action="/usuario/{{$usuario->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre: 
        <input type="text" name="nombre" value="{{$usuario->nombre}}" required>
    </label>
    <br>

    <label>
        Apellido paterno: 
        <input type="text" name="apellido_paterno" value="{{$usuario->apellido_paterno}}" required>
    </label>
    <br>

    <label>
        Apellido materno: 
        <input type="text" name="apellido_materno" value="{{$usuario->apellido_materno}}" required>
    </label>
    <br>

    <label>
        Fecha nacimiento: 
        <input type="date" name="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}" required>
    </label>
    <br>

    <label>
        Correo: 
        <input type="email" name="correo" value="{{$usuario->correo}}" required>
    </label>
    <br>

    <label>
        Contraseña: 
        <input type="password" name="contrasena" value="{{$usuario->contrasena}}" required>
    </label>
    <br>

    <button type="submit">
        Actualizar usuario
    </button>
</form>
@endsection