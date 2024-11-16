<?php

namespace App\Http\Controllers;

use App\Models\autoVenta;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AutoVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autoventa=autoventa::paginate(10);
        return view('auto_renta.index',['autoventas'=>$autoventa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auto_renta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autoventa=new autoventa();
        $autoventa->placa = $request->placa;
        $autoventa->precio = $request->precio;
        $autoventa->modelo = $request->modelo;
        $autoventa->marca = $request->marca;
        $autoventa->color = $request->color;
        $autoventa->estatus = $request->estatus;
        $autoventa->id_usuario1 = $request->id_usuario1;

        $autoventa->save();
        Alert::success('auto guardado','El auto se guardo correctamente');
        return redirect('/auto_renta');
    }

    /**
     * Display the specified resource.
     */
    public function show($autoventa)
    {
        $autoventa=autoventa::find($autoventa);
        return view('auto_renta.show',compact('autoventa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($autoventa)
    {
        $autoventa=autoventa::find($autoventa);
        return view('/auto_renta/edit',compact('autoventa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $autoventa)
    {
        $autoventa=autoventa::find($autoventa);
        $autoventa->placa = $request->placa;
        $autoventa->precio = $request->precio;
        $autoventa->modelo = $request->modelo;
        $autoventa->marca = $request->marca;
        $autoventa->color = $request->color;
        $autoventa->estatus = $request->estatus;
        $autoventa->id_usuario1 = $request->id_usuario1;

        $autoventa->save();
        Alert::success('auto editado','El auto se edito correctamente');
        return redirect("/auto_renta/{$autoventa->id}");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($autoventa)
    {
        $autoventa=autoventa::find($autoventa);
        $autoventa->delete();
        Alert::success('auto eliminado','el auto se elimino correctamente');
        return redirect("/auto_renta");
    }
}
