<?php

namespace Database\Seeders;

use App\Models\Clientes;
use App\Models\FacturasVenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturasVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacturasVenta::factory(10)->create();
    }
}
