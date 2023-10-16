<?php

namespace Database\Factories;

use App\Models\Rota;
use App\Models\VoltaOnibus;
use App\Models\IdaOnibus;
use Illuminate\Database\Eloquent\Factories\Factory;

class RotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rota::class;

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
        | Obtendo todos os IDs das voltas de ônibus existentes no banco de dados
        | e armazenando-os em uma variável (array).
        | ----------------------------------------------
        | VoltaOnibus::pluck('id') - Obtém apenas os IDs de todos os registros da tabela 'voltas_onibus'
        | toArray() - Converte a coleção de IDs em um array
        */
        $idVoltasOnibus = VoltaOnibus::pluck('id')->toArray();

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
        $idIdasOnibus = IdaOnibus::all()->pluck('id');

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
