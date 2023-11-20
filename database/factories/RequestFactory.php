<?php

namespace Database\Factories;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
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
        $idUsuarios = User::all()->pluck('id');
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
            'user_id' => $this->faker->randomElement($idUsuarios),
            'feedback_id' => $this->faker->randomElement($idFeedbacks),
            'data_hora' => $this->faker->dateTime(),
            'retorno_requisicao' => $this->faker->boolean()
        ];
    }
}
