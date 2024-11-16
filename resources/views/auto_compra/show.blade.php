@extends('layouts.app')

@section('title')
autocompra #{{$autocompra->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/auto_compra">Volver a CRUD</a>
<br>
<center>
<h1>Información del auto</h1>
<h2>Id: {{$autocompra->id}}</h2>
<h2>Modelo:{{$autocompra->modelo}}</h2>
<h2>Precio: {{$autocompra->precio}}</h2>
<h2>Marca: {{$autocompra->marca}}</h2>
<h2>Color: {{$autocompra->color}}</h2>
<h2>Estatus: {{$autocompra->estatus}}</h2>
<h2>Id_usuario1: {{$autocompra->id_usuario1}}</h2>
</center>
<br>

@endsection