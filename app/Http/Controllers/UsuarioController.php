<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario=usuario::paginate(10);
        return view ('usuario.index',['usuarios'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario=new usuario();
        $usuario->nombre =$request->nombre;
        $usuario->apellido_paterno =$request->apellido_paterno;
        $usuario->apellido_materno =$request->apellido_materno;
        $usuario->fecha_nacimiento =$request->fecha_nacimiento;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
        Alert::success('usuario guardado', 'El usuario se creo correctamente');
        return redirect('/usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show($usuario)
    {
        $usuario=usuario::find($usuario);
        return view('usuario.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($usuario)
    {
        $usuario=usuario::find($usuario);
        return view('/usuario/edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $usuario)
    {
        $usuario= usuario::find($usuario);
        $usuario->nombre =$request->nombre;
        $usuario->apellido_paterno =$request->apellido_paterno;
        $usuario->apellido_materno =$request->apellido_materno;
        $usuario->fecha_nacimiento =$request->fecha_nacimiento;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
        Alert::success('usuario editado', 'El usuario se edito correctamente');
        return redirect("/usuario/{$usuario->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($usuario)
    {
        $usuario=usuario::find($usuario);
        $usuario->delete();
        Alert::success('usuario eliminado', 'El usuario se elimino correctamente');
        return redirect("/usuario");
    }
}
