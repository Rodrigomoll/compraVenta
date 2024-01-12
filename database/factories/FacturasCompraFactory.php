<?php

namespace Database\Factories;

use App\Models\Proveedores;
use App\Models\FacturasCompra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FacturasCompra>
 */
class FacturasCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtén un proveedor existente de los que ya tienes
        $proveedor = Proveedores::inRandomOrder()->first() ?? Proveedores::factory()->create();

        return [
            'id_proveedor' => $proveedor->id,
            'fecha' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 10, 5000),
        ];
    }
}
