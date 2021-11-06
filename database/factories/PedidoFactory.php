<?php

namespace Database\Factories;

use App\Models\User;
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
            'user_id' => User::factory(),
            'codigo' => $this->faker->unique()->randomNumber(7),
            'pagamento' => $this->faker->creditCardType(),
            'status' => $this->faker->randomElement(['cancelado', 'aprovado', 'aguardando', 'negado']),
            'valor' => $this->faker->randomFloat(2, 10, 500),
            'quantidade_tickets' => $this->faker->randomNumber(2)
        ];
    }
}
