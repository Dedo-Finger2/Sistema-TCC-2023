<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura pra usar as factories é essa:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | address() - Gera endereços completos aleatórios
            | streetName() - Gera nomes de ruas aleatórios
            | city() - Gera nomes de cidades aleatórios
            */

            'logradouro' => $this->faker->address(),
            'bairro' => $this->faker->streetName(),
            'cidade' => $this->faker->city(),
        ];
    }
}
