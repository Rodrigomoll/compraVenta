<?php

namespace Database\Seeders;

use App\Models\DetallesVenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallesVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetallesVenta::factory(10)->create();
    }
}
