<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
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
            'cliente_id' => Cliente::all()->random(),
            'empleado_id' => Empleado::all()->random(),
            'articulo_id' => Articulo::all()->random(),
        ];
    }
}