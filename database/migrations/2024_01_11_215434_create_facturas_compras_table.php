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
        Schema::create('facturas_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('Proveedores');
            $table->date('fecha');
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_compras');
    }
};
