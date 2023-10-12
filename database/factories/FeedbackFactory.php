<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
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
        $idUsuairos = Usuario::all()->pluck('id_usuario');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura pra usar as factories é essa:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | paragraph() - Gera parágrafos aleatórios (podemos dizer quantas frases queremos como parâmetro)
            | date() - Gera datas aleatórias
            | boolean() - Gera 0s ou 1s aleatórios (podemos passar a chance de cair um ou outro como parâmetro)
            | randomElement() - Pega um item aleatório de um array passado como parâmetro
            */
            'comentario' => $this->faker->paragraph(1),
            'data' => $this->faker->date(),
            'feedback' => $this->faker->boolean(50),
            'id_usuario' => $this->faker->randomElement($idUsuairos),
        ];
    }
}
