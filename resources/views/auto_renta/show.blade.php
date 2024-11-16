@extends('layouts.app')

@section('title')
autoventa #{{$autoventa->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/auto_renta">Volver a CRUD</a>
<br>
<center>
<h1>Información del auto</h1>
<h2>Id: {{$autoventa->id}}</h2>
<h2>Placa: {{$autoventa->placa}}</h2>
<h2>Modelo:{{$autoventa->modelo}}</h2>
<h2>Precio: {{$autoventa->precio}}</h2>
<h2>Marca: {{$autoventa->marca}}</h2>
<h2>Color: {{$autoventa->color}}</h2>
<h2>Estatus: {{$autoventa->estatus}}</h2>
<h2>Id_usuario1: {{$autoventa->id_usuario1}}</h2>
</center>
<br>

@endsection