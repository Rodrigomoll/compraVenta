<?php

namespace Database\Factories;

use App\Models\Clientes;
use App\Models\FacturasVenta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FacturasVenta>
 */
class FacturasVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtén un cliente existente de los que ya tienes
        $cliente = Clientes::inRandomOrder()->first() ?? Clientes::factory()->create();

        return [
            'id_cliente' => $cliente->id,
            'fecha' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 10, 5000),
        ];
    }
}
