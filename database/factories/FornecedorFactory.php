<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nome_fornecedor' => $this->faker->name(),
            'cnpj' => ('cnpj'),
            'razao_social' => $this->faker->company(),
            'atividade_principal' => $this->faker->companySuffix(),
            'cep' => $this->faker->postcode(),
            'endereco' => $this->faker->city(),
        ];
    }
}
