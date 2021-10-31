<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PremioImagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word(),
            'caminho' => $this->faker->imageUrl(1024, 768)
        ];
    }
}
