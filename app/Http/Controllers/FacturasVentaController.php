<?php

namespace App\Http\Controllers;

use App\Models\FacturasVenta;
use Illuminate\Http\Request;

class FacturasVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FacturasVenta::all();
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
        $facturaVenta = new FacturasVenta();
        $facturaVenta->id_cliente = $request->id_cliente;
        $facturaVenta->fecha = $request->fecha;
        $facturaVenta->total = $request->total;
        $facturaVenta->save();

        return response()->json(['message' => 'Factura de venta creada correctamente'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(FacturasVenta $facturasVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacturasVenta $facturasVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $facturaVenta = new FacturasVenta($id);
        $facturaVenta->id_cliente = $request->id_cliente;
        $facturaVenta->fecha = $request->fecha;
        $facturaVenta->total = $request->total;
        $facturaVenta->save();

        return response()->json(['message' => 'Factura de venta actualizada correctamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facturaVenta = FacturasVenta::find($id);
        $facturaVenta->delete();

        return response()->json(['message' => 'Factura de venta eliminada'],200);
    }
}
