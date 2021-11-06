<?php

namespace Database\Factories;

use App\Models\Premio;
use App\Models\Sorteio;
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
            'sorteio_id' => Sorteio::factory()
                ->hasPremio(1),
            'nome' => $this->faker->word(),
            'descricao' => $this->faker->text(200),
            'valor' => $this->faker->randomFloat(2, 500, 500000),
        ];
    }
}
