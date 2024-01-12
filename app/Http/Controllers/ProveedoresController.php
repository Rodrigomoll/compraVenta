<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Proveedores::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedores();
        $proveedor->nombre = $request->nombre;
        $proveedor->email = $request->email;
        $proveedor->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedores $proveedores)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedores::find($id);
        $proveedor->nombre = $request->nombre;
        $proveedor->email = $request->email;
        $proveedor->save();

        return 'Proveedor actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedores::find($id);
        $proveedor->delete();

        return 'Proveedor eliminado correctamente';
    }
}
