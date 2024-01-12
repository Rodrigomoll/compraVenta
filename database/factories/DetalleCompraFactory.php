<?php

namespace Database\Factories;

use App\Models\FacturasCompra;
use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleCompra>
 */
class DetalleCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtén un producto existente de los que ya tienes
        $producto = Productos::inRandomOrder()->first() ?? Productos::factory()->create();

        $facturaCompraId = FacturasCompra::factory()->create()->id;

        return [
            'id_facturaCompra' => $facturaCompraId,
            'id_producto' => $producto->id,
            'cantidad' => $this->faker->numberBetween(1, 100),
            'precioUnitario' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
