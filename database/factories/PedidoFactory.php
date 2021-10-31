<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->randomNumber(7),
            'pagamento' => $this->faker->creditCardType(),
            'status' => $this->faker->regexify('cancelado|aprovado|aguardando|negado'),
            'valor' => $this->faker->randomFloat(2, 10, 500),
            'quantidade_tickets' => $this->faker->randomNumber(2)
        ];
    }
}
