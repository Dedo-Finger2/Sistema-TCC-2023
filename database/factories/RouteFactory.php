<?php

namespace Database\Factories;

use App\Models\BusInbound;
use App\Models\BusOutbound;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        | ----------------------------------------------
        | Explicação
        | ----------------------------------------------
        | Obtendo todos os IDs das idas de ônibus existentes no banco de dados
        | e armazenando-os em uma variável (array).
        | ----------------------------------------------
        | BusOutbound::pluck('id') - Obtém apenas os IDs de todos os registros da tabela 'idas_onibus'
        | toArray() - Converte a coleção de IDs em um array
        */
        $idIdasOnibus = BusOutbound::all()->pluck('id');
        $idVoltasOnibus = BusInbound::all()->pluck('id');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura para usar as factories é a seguinte:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | randomElement() - Seleciona um elemento aleatório de um array passado como parâmetro
            */
            'bus_inbound_id' => $this->faker->randomElement($idVoltasOnibus),
            'bus_outbound_id' => $this->faker->randomElement($idIdasOnibus),
        ];
    }
}
