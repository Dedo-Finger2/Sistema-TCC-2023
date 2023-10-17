<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocalRequisitado>
 */
class LocalRequisitadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        | ---------------------------------------------
        | Explicação
        | ---------------------------------------------
        | Pegando todos os IDs que existem no nosso
        | banco de dados e guardando dentro de uma variável (array)
        | ---------------------------------------------
        | Modelo::all() - Pega todas as linhas da tabela que o modelo representa
        | pluck('id') - Pega apenas o ID de todos os dados da tabela
        */
        $idEnderecos = Endereco::all()->pluck('id_endereco');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura pra usar as factories é essa:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | streetName() - Gera nome de ruas aleatórios
            | randomElement() - Pega um item aleatório de um array passado como parâmetro
            */
            'nome' => $this->faker->streetName(),
            'id_endereco' => $this->faker->randomElement($idEnderecos),
        ];
    }
}
