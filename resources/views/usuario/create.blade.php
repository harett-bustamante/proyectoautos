@extends('layouts.app')

@section('title','Auto.io | Crear usuario')

@section('content')
<h1>Crear usuario</h1>
<form action="/usuario" method="post">
    @csrf
    
    <label>
        Id: 
        <input type="integer" name="id" required>
    </label>
    <br>
    
    <label>
        Nombres: 
        <input type="text" name="nombre" required>
    </label>
    <br>

    <label>
        Apellido paterno: 
        <input type="text" name="apellido_paterno" required>
    </label>
    <br>

    <label>
        Apellido materno:
        <input type="text" name="apellido_materno" required>
    </label>
    <br>

    <label>
        Fecha nacimiento: 
        <input type="date" name="fecha_nacimiento" required>
    </label>
    <br>

    <label>
        Correo: 
        <input type="email" name="correo" required>
    </label>
    <br>

    <label>
        Contraseña: 
        <input type="password" name="contrasena" required>
    </label>
    <br>
    <button type="submit">
        Crear usuario
    </button>
</form>
@endsection