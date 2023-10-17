<?php

namespace Database\Factories;

use App\Models\Onibus;
use App\Models\Rota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Itinerario>
 */
class ItinerarioFactory extends Factory
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
        $idOnibus = Onibus::all()->pluck('id_onibus');
        $idRotas = Rota::all()->pluck('id_rota');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura pra usar as factories é essa:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | randomAscii() - Gera ??? aleatórios
            | randomElement() - Pega um item aleatório de um array passado como parâmetro
            */
            'codigo_itinerario' => $this->faker->numerify("0###-". $this->faker->streetName()),
            'id_onibus' => $this->faker->randomElement($idOnibus),
            'id_rota' => $this->faker->randomElement($idRotas),
        ];
    }
}
