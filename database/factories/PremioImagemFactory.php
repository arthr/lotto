<?php

namespace Database\Factories;

use App\Models\Premio;
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
            'premio_id' => Premio::factory(),
            'titulo' => $this->faker->word(),
            'caminho' => $this->faker->imageUrl(1024, 768)
        ];
    }
}
