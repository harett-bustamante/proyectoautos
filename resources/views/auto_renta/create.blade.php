@extends('layouts.app')

@section('title','Autos.io | Crear auto')

@section('content')
<h1>Crear auto</h1>
<form action="/auto_renta" method="post">
    @csrf
    <label>
        Placa: 
        <input type="text" name="placa" required>
    </label>
    <br>

    <label>
        Modelo: 
        <input type="text" name="modelo" required>
    </label>
    <br>

    <label>
        Precio: 
        <input type="float" name="precio" required>
    </label>
    <br>

    <label>
        Marca:
        <input type="text" name="marca" required>
    </label>
    <br>

    <label>
        Color: 
        <input type="text" name="color" required>
    </label>
    <br>

    <label>
        Estatus:
        <input type="text" name="estatus" required>
    </label>
    <br>

    <label>
        Id_usuario1:
        <input type="number" name="id_usuario1" required>
    </label>
    <br>
    <button type="submit">
        Crear auto
    </button>
</form>
@endsection