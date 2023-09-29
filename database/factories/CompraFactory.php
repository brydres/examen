<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Empleado;
use App\Models\Evento;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evento_id' => Evento::all()->random(),
            'proveedor_id' => Proveedor::all()->random(),
            'empleado_id' => Empleado::all()->random(),
            'articulo_id' => Articulo::all()->random(),
        ];
    }
}