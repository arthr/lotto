<?php

namespace Database\Factories;

use App\Models\Premio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PremioFactory extends Factory
{

    protected $model = Premio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->words(3),
            'descricao' => $this->faker->text(200),
            'valor' => $this->faker->randomFloat(2, 500, 500000),
        ];
    }
}
