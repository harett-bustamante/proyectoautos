@extends('layouts.app')

@section('title','Autos.io | Crear direccion')

@section('content')
<h1 style="background-image: linear-gradient(to right, #1648cd, lightblue);color:white;">Crear direccion</h1>
<center>
<form action="/direccion" method="post">
    @csrf
    <label>
        Num_exterior: 
        <input type="text" name="num_exterior" required>
    </label>
    <br>

    <label>
        Num_interior: 
        <input type="text" name="num_interior" required>
    </label>
    <br>

    <label>
        Calle: 
        <input type="text" name="calle" required>
    </label>
    <br>

    <label>
        Colonia:
        <input type="text" name="colonia" required>
    </label>
    <br>

    <label>
        Municipio: 
        <input type="text" name="municipio" required>
    </label>
    <br>

    <label>
        Estado:
        <input type="text" name="estado" required>
    </label>
    <br>

    <label>
        Pais:
        <input type="text" name="pais" required>
    </label>
    <br>

    <label>
        Codigo_Postal:
        <input type="text" name="codigo_postal" required>
    </label>
    <br>

    <label>
        Id_usuario1:
        <input type="number" name="id_usuario1" required>
    </label>
    <br>
    <button type="submit">
        Crear direccion
    </button>
</form>
</center>
@endsection