<?php

namespace App\Http\Controllers;

use App\Models\DetallesVenta;
use Illuminate\Http\Request;

class DetallesVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetallesVenta::all();
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
        $detalleVenta = new DetallesVenta();
        $detalleVenta->id_facturaVenta = $request->id_facturaVenta;
        $detalleVenta->id_producto = $request->id_producto;
        $detalleVenta->cantidad = $request->cantidad;
        $detalleVenta->precioUnitario = $request->precioUnitario;
        $detalleVenta->save();

        return response()->json(['message' => 'Detalle de venta creada correctamente'],200 );
    }

    /**
     * Display the specified resource.
     */
    public function show(DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detalleVenta = DetallesVenta::find($id);
        $detalleVenta->id_facturaVenta = $request->id_facturaVenta;
        $detalleVenta->id_producto = $request->id_producto;
        $detalleVenta->cantidad = $request->cantidad;
        $detalleVenta->precioUnitario = $request->precioUnitario;
        $detalleVenta->save();

        return response()->json(['message' => 'Detalle de venta actualizado correctamente'],200 );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detalleVenta = DetallesVenta::find($id);
        $detalleVenta->delete();

        return response()->json(['message' => 'Detalle de venta eliminado'],200);
    }
}
