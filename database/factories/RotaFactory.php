<?php

namespace Database\Factories;

use App\Models\VoltaOnibus;
use App\Models\IdaOnibus;
use Illuminate\Database\Eloquent\Factories\Factory;

class RotaFactory extends Factory
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
        | IdaOnibus::pluck('id') - Obtém apenas os IDs de todos os registros da tabela 'idas_onibus'
        | toArray() - Converte a coleção de IDs em um array
        */
        $idIdasOnibus = IdaOnibus::all()->pluck('id_ida_onibus');
        $idVoltasOnibus = VoltaOnibus::all()->pluck('id_volta_onibus');

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
            'id_volta_onibus' => $this->faker->randomElement($idVoltasOnibus),
            'id_ida_onibus' => $this->faker->randomElement($idIdasOnibus),
        ];
    }
}
