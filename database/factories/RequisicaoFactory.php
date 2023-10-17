<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requisicao>
 */
class RequisicaoFactory extends Factory
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
        $idUsuarios = Usuario::all()->pluck('id');
        $idFeedbacks = Feedback::all()->pluck('id');


        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura pra usar as factories é essa:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | atribui ids da aleatorios da tabela que você quer
            | randomElemnt(ids do Model especifico)
            | time() gera datas aleatorias
            */
            'id_usuario' => $this->faker->randomElement($idUsuarios),
            'id_feedback' => $this->faker->randomElement($idFeedbacks),
            'data_hora' => $this->faker->date()
        ];
    }
}
