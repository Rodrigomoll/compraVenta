<?php

namespace Database\Seeders;

use App\Models\FacturasCompra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturasCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacturasCompra::factory(10)->create();
    }
}
