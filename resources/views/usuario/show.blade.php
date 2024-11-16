@extends('layouts.app')

@section('title')
usuario #{{$usuario->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/usuario">Volver a CRUD</a>
<br>
<h1>Información del usuario</h1>
<h2>Id: {{$usuario->id}}</h2>
<h2>Nombre:{{$usuario->nombre}}</h2>
<h2>Apellido paterno: {{$usuario->apellido_paterno}}</h2>
<h2>Apellido materno: {{$usuario->apellido_materno}}</h2>
<h2>Fecha nacimiento: {{$usuario->fecha_nacimiento}}</h2>
<h2>Correo: {{$usuario->correo}}</h2>
<h2>Contrasena: {{$usuario->contrasena}}</h2>
<br>

@endsection