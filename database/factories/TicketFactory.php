<?php

namespace Database\Factories;

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
            'valor' => $this->faker->randomFloat(2, 1, 100),
            'desconto' => $this->faker->randomFloat(2, 1, 10)
        ];
    }
}
