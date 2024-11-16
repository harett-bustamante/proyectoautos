@extends('layouts.app')
@section('title','Autos.io')
@section('content')
<div style="background-color:blue;">
    <h2>Iniciar sesión</h2>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="correo">Correo: </label><br>
        <input type="email" name="correo" id="correo" required><br><br>

        <label for="contrasena">Contraseña: </label><br>
        <input type="password" name="contrasena" id="contrasena" required><br><br>

        <button type="submit" class="btn btn-primary">Iniciar sesión.</button>
    </form>
    <br>
    <p>¿No tienes cuenta? <a href="/register"> Crea una cuenta dando clic aquí.</a></p>
</div>
@endsection