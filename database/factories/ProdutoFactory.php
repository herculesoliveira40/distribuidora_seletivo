<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nome_produto' => $this->faker->firstName(),
            'valor' => rand(0, 100000.1),
            'descricao' => ('descricao'),
            'quantidade' => rand(1, 3),
            'data_fabricacao' => $this->faker->dateTime($max = 'now', $timezone = null),
            'data_vencimento' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
