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
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_facturaCompra');
            $table->foreign('id_facturaCompra')->references('id')->on('facturas_compras');
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
        Schema::dropIfExists('detalle_compras');
    }
};
