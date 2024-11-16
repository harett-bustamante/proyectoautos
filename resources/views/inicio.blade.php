@extends('layouts.app')

@section('title','Autos.io')

@section('content')

<div>
    <table style="width:100%;">
        <tr>
            <td colspan="3" style="background-color:#1648cd;"><center><h1 style="color:white;"> $$$ AUTOS BARATOS $$$</h1></center></td>
        </tr>
        <tr>
            <td style="background-color:#2597d4;"> 
                <center>
                    <h2>Inicia sesión:</h2>
                    <button class="btn btn-primary"><a href="/login" style="color: white; text-decoration:none">Iniciar Sesión.</a></button>
                </center>
            </td>
            <td colspan="2" style="background-color:#2597d4;">
                <center>
                    <h2>¿No tienes cuenta? Registrate gratis aquí:</h2>
                    <button class="btn btn-primary"><a href="/register" style="color: white; text-decoration:none">Registrarse.</a></button>
                </center>
            </td>
        </tr>
        <tr>
            <td style="background-color:lightblue;"><center><img src="{{asset('img/lamborosa.gif')}}" alt="lambo" height="230" width="250"></center></td>
            <td style="background-color:lightblue;"><center><img src="{{asset('img/banner.jpg')}}" alt="banner" height="250" width="750"></center></td>
            <td style="background-color:lightblue;"><center><img src="{{asset('img/lamborosa.gif')}}" alt="lambo" height="230" width="250"></center></td>
        </tr>
    </table>
</div>

<div>
    
    <img src="{{asset('img/autosfake.jpg')}}" alt="autosfake" height="600" width="1300">
    
</div>

@endsection