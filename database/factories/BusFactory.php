<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $IdEmpresas = Company::all()->pluck('id');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura para usar as factories é a seguinte:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | numberBetween() - Gera um número aleatório entre os valores fornecidos
            | randomElement() - Gera um único dígito aleatório
            */
            'numeracao' => $this->faker->numerify("####-##"),
            'company_id' => $this->faker->randomElement($IdEmpresas),
        ];
    }
}
