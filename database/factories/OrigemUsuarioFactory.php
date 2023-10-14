<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrigemUsuario>
 */
class OrigemUsuarioFactory extends Factory
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
        $idEnderecos = Endereco::all()->pluck('id');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura pra usar as factories é essa:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | atribui ids da aleatorios da tabela que você quer
            | name() método que gera nomes aleatorios
            | randomElemnt(ids do Model especifico)
            */
            'nome' => $this->fake->name(),
            'id_endereco' => $this->faker->randomElement($idEnderecos),

        ];
    }
}
