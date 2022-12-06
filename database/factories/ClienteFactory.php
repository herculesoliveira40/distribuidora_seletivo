<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nome_cliente' => $this->faker->name(),
            'cnpj' => ('cnpj'),
            'cpf' => $this->faker->phoneNumber(),
            'razao_social'  => ('razao_social'),
            'atividade_principal'  => ('atividade_principal'),
            'cep' => $this->faker->postcode(),
            'endereco' => $this->faker->city(),
        ];
    }
}
