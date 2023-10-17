<?php

namespace Database\Factories;

use App\Models\VoltaOnibus;
use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoltaOnibusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VoltaOnibus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*
        | ----------------------------------------------
        | Explicação
        | ----------------------------------------------
        | Obtendo todos os IDs dos endereços existentes no banco de dados
        | e armazenando-os em uma variável (array).
        | ----------------------------------------------
        | Endereco::pluck('id') - Obtém apenas os IDs de todos os registros da tabela 'enderecos'
        | toArray() - Converte a coleção de IDs em um array
        */
        $idEnderecos = Endereco::all()->pluck('id');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura para usar as factories é a seguinte:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | time() - Gera um valor de hora aleatório
            | randomElement() - Seleciona um elemento aleatório de um array passado como parâmetro
            */
            'horario' => $this->faker->time(),
            'id_endereco' => $this->faker->randomElement($idEnderecos),
        ];
    }
}
