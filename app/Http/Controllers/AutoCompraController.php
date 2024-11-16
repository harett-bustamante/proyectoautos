<?php

namespace App\Http\Controllers;

use App\Models\autoCompra;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AutoCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autocompra=autocompra::paginate(10);
        return view('auto_compra.index',['auto_compras'=>$autocompra]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auto_compra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autocompra=new autocompra();
        $autocompra->precio = $request->precio;
        $autocompra->modelo = $request->modelo;
        $autocompra->marca = $request->marca;
        $autocompra->color = $request->color;
        $autocompra->estatus = $request->estatus;
        $autocompra->id_usuario1 = $request->id_usuario1;

        $autocompra->save();
        Alert::success('auto guardado','El auto se guardo correctamente');
        return redirect('/auto_compra');
    }

    /**
     * Display the specified resource.
     */
    public function show($autocompra)
    {
        $autocompra=autocompra::find($autocompra);
        return view('auto_compra.show',compact('autocompra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($autocompra)
    {
        $autocompra=autocompra::find($autocompra);
        return view('/auto_compra/edit',compact('autocompra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $autocompra)
    {
        $autocompra=autocompra::find ($autocompra);
        $autocompra->precio = $request->precio;
        $autocompra->modelo = $request->modelo;
        $autocompra->marca = $request->marca;
        $autocompra->color = $request->color;
        $autocompra->estatus = $request->estatus;
        $autocompra->id_usuario1 = $request->id_usuario1;

        $autocompra->save();
        Alert::success('auto editado','El auto se edito correctamente');
        return redirect("/auto_compra/{$autocompra->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($autocompra)
    {
        $autocompra=autocompra::find($autocompra);
        $autocompra->delete();
        Alert::success('auto eliminado','El auto se elimino correctamente');
        return redirect("/auto_compra");
    }
}
