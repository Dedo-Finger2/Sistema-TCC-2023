<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Request;
use App\Models\RequestedLocation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserOrigin>
 */
class UserOriginFactory extends Factory
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
        $idEnderecos = Address::all()->pluck('id');
        $idLocaisRequisitados = RequestedLocation::all()->pluck('id');
        $idRequisicoes = Request::all()->pluck('id');
        $idUsuarios = User::all()->pluck('id');

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
            'nome' => $this->faker->name(),
            'address_id' => $this->faker->randomElement($idEnderecos),
            'requested_location_id' => $this->faker->randomElement($idLocaisRequisitados),
            'user_id' => $this->faker->randomElement($idUsuarios),
            'request_id' => $this->faker->randomElement($idRequisicoes),

        ];
    }
}
