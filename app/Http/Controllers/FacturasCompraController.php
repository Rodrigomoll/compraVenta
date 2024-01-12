<?php

namespace App\Http\Controllers;

use App\Models\FacturasCompra;
use Illuminate\Http\Request;

class FacturasCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FacturasCompra::all();
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
        $facturaCompra = new FacturasCompra();
        $facturaCompra->id_proveedor = $request->id_proveedor;
        $facturaCompra->fecha = $request->fecha;
        $facturaCompra->total = $request->total;
        $facturaCompra->save();

        return response()->json(['message' => 'Factura de compra creada correctamente'], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(FacturasCompra $facturasCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacturasCompra $facturasCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $facturaCompra = FacturasCompra::find($id);
        $facturaCompra->id_proveedor = $request->id_proveedor;
        $facturaCompra->fecha = $request->fecha;
        $facturaCompra->total = $request->total;
        $facturaCompra->save();

        return response()->json(['message' => 'Factura de compra actualizada correctamente'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facturaCompra = FacturasCompra::find($id);
        $facturaCompra->delete();

        return response()->json(['message' => 'Factura de compra eliminada'], 200);
    }
}
