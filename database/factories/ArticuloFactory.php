<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Articulo::class;

    public function definition(): array
    {
        return [

            'nombre' => $this->faker->randomElement([
                'Zapatos deportivas',
                'computador Portátil',
                'Smartphone de Alta Gama',
                'Auriculares inalámbricos',
                'Reloj inteligente',
                'Tablet de alta resolución',
                'Mouse ergonómico',
                'Monitor curvo de 37 pulgadas',
                'Impresora láser de alta velocidad',
                'Disco duro externo de 6TB',
                'Altavoces Bluetooth',
                'Bicicleta todo terreno',
                'Cafetera de espresso',
                'Licuadora',
                'Silla ergonómica de oficina',
                'Mesa de comedor extensible',
                'Sofá reclinable',
                'Colchón ortopédico',
                'Sabanas todas las medidas',
                'Bolso de cuero genuino',
                'Cepillo de dientes eléctrico',
                'Cargador solar portátil',
                'Horno de microondas',
                'Aspiradora de mano sin cables',
                'Set de maquillaje',
                'Taladro inalámbrico de alta potencia',
                'Secadora de ropa eficiente',
                'Plancha de vapor',
                'Juego de sartenes antiadherentes',
                'Batería externa de gran capacidad',
                'Proyector de alta definición',
                'Cortadora de césped automática',
                'Cadena de oro de 18 quilates',
                'Perfume unisex exclusivo'
            ]),
            'estado' => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }
}