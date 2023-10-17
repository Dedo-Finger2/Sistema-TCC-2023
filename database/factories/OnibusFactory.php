<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class OnibusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $IdEmpresas = Empresa::all()->pluck('id_empresa');

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
            'id_empresa' => $this->faker->randomElement($IdEmpresas),
        ];
    }
}
