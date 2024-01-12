<?php

namespace Database\Factories;

use App\Models\FacturasVenta;
use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetallesVenta>
 */
class DetallesVentaFactory extends Factory
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

        $facturaVentaId = FacturasVenta::factory()->create()->id;

        return [
            'id_facturaVenta' => $facturaVentaId,
            'id_producto' => $producto->id,
            'cantidad' => $this->faker->numberBetween(1, 100),
            'precioUnitario' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
