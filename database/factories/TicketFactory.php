<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Sorteio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sorteio_id' => Sorteio::factory(),
            'pedido_id' => Pedido::factory()
                ->state(function (array $attr, Sorteio $sorteio) {
                    return [
                        'user_id' => $sorteio->user_id
                    ];
                }),
            'valor' => $this->faker->randomFloat(2, 1, 100),
            'desconto' => $this->faker->randomFloat(2, 1, 10)
        ];
    }
}
