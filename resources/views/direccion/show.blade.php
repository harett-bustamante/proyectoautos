@extends('layouts.app')

@section('title')
direccion #{{$direccion->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/direccion">Volver a CRUD</a>
<br>
<center>
<h1>Información de la direccion</h1>
<h2>Id: {{$direccion->id}}</h2>
<h2>num_exterior: {{$direccion->num_exterior}}</h2>
<h2>num_interior:{{$direccion->num_interior}}</h2>
<h2>Calle: {{$direccion->calle}}</h2>
<h2>Colonia: {{$direccion->colonia}}</h2>
<h2>Municipio: {{$direccion->municipio}}</h2>
<h2>Estado: {{$direccion->estado}}</h2>
<h2>Pais: {{$direccion->pais}}</h2>
<h2>codigo_postal: {{$direccion->codigo_postal}}</h2>
<h2>Id_usuario1: {{$direccion->id_usuario1}}</h2>
</center>
<br>

@endsection