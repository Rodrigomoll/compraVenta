<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Database\Seeders\DetalleCompraSeeder;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetalleCompra::all();
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
        $detalleCompra = new DetalleCompra();
        $detalleCompra->id_facturaCompra = $request->id_facturaCompra;
        $detalleCompra->id_producto = $request->id_producto;
        $detalleCompra->cantidad = $request->cantidad;
        $detalleCompra->precioUnitario = $request->precioUnitario;
        $detalleCompra->save();

        return response()->json(['message' => 'Detalle de compra creada correctamente'], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(DetalleCompra $detalleCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetalleCompra $detalleCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detalleCompra = DetalleCompra::find($id);
        $detalleCompra->id_facturaCompra = $request->id_facturaCompra;
        $detalleCompra->id_producto = $request->id_producto;
        $detalleCompra->cantidad = $request->cantidad;
        $detalleCompra->precioUnitario = $request->precioUnitario;
        $detalleCompra->save();

        return response()->json(['message' => 'Detalle de compra actualizada correctamente'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detalleCompra = DetalleCompra::find($id);
        $detalleCompra->delete();

        return response()->json(['message' => 'Detalle de compra eliminada'], 200);
    }
}
