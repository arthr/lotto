<?php

namespace Database\Factories;

use App\Models\Sorteio;
use Illuminate\Database\Eloquent\Factories\Factory;

class SorteioFactory extends Factory
{

    protected $model = Sorteio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word(),
            'descricao' => $this->faker->text(400),
            'quantidade_tickets' => $this->faker->randomNumber(3),
            'preco_ticket' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
