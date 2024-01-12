<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeders para las tablas sin dependencias
        $this->call(ClientesSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(ProveedoresSeeder::class);

        // Seeders para las tablas con dependencias
        $this->call(FacturasCompraSeeder::class);
        $this->call(DetalleCompraSeeder::class);
        // Otros seeders

        // Seeders para las tablas finales
        $this->call(FacturasVentaSeeder::class);
        $this->call(DetallesVentaSeeder::class);
        // Otros seeders
    }
}
