<?php

namespace App\Http\Controllers;

use App\Models\direccion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direccion=direccion::paginate(10);
        return view('direccion.index',['direcciones'=>$direccion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('direccion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $direccion=new direccion();
        $direccion->num_exterior = $request->num_exterior;
        $direccion->num_interior = $request->num_interior;
        $direccion->calle = $request->calle;
        $direccion->colonia = $request->colonia;
        $direccion->municipio = $request->municipio;
        $direccion->estado = $request->estado;
        $direccion->pais = $request->pais;
        $direccion->codigo_postal = $request->codigo_postal;
        $direccion->id_usuario1 = $request->id_usuario1;

        $direccion->save();
        Alert::success('direccion guardada','La direccion se creo correctamente');
        return redirect('/direccion');
    }

    /**
     * Display the specified resource.
     */
    public function show($direccion)
    {
        $direccion=direccion::find($direccion);
        return view('direccion.show',compact('direccion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($direccion)
    {
        $direccion=direccion::find($direccion);
        return view('/direccion/edit',compact('direccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $direccion)
    {
        $direccion=direccion::find($direccion);
        $direccion->num_exterior = $request->num_exterior;
        $direccion->num_interior = $request->num_interior;
        $direccion->calle = $request->calle;
        $direccion->colonia = $request->colonia;
        $direccion->municipio = $request->municipio;
        $direccion->estado = $request->estado;
        $direccion->pais = $request->pais;
        $direccion->codigo_postal = $request->codigo_postal;
        $direccion->id_usuario1 = $request->id_usuario1;

        $direccion->save();
        Alert::success('direccion editada', 'Se edito la direccion correctamente');
        return redirect("/direccion/{$direccion->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($direccion)
    {
        $direccion=direccion::find($direccion);
        $direccion->delete();
        Alert::success('direccion eliminada','La direccion se elimino correctamente');
        return redirect("/direccion");
    }
}
