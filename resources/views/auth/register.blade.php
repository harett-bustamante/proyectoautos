
@extends('layouts.app')

@section('title','Autos.io')

@section('content')
<div>
    <h2>Sign Up</h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="apellido_paterno">Apellido Paterno:</label><br>
        <input type="text" name="apellido_paterno" id="apellido_paterno" required><br><br>

        <label for="apellido_materno">Apellido Materno:</label><br>
        <input type="text" name="apellido_materno" id="apellido_materno" required><br><br>

        <label for="fecha_nacimiento">Fecha nacimiento:</label><br>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required><br><br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" required><br><br>

        <label for="contrasena">Contraseña:</label><br>
        <input type="password" name="contrasena" id="contrasena" required><br><br>

        <label for="contrasena_confirmation">Confirmar contraseña:</label><br>
        <input type="password" name="contrasena_confirmation" id="contrasena_confirmation" required><br><br>

        <button type="submit" class="btn btn-primary">Registrarse.</button>

    </form>
    <br>
    <p>¿ya tienes cuenta?<a href="/login">Inicia sesión dando clic aquí.</a></p>
</div>
@endsection
