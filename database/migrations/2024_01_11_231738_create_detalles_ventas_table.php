<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_facturaVenta');
            $table->foreign('id_facturaVenta')->references('id')->on('facturas_ventas');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('Productos');
            $table->integer('cantidad');
            $table->decimal('precioUnitario', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_ventas');
    }
};
