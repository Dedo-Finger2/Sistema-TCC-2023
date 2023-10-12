<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
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
            | company() - Gera nome de empresas aleatórios
            | companyEmail() - Gera emails de empresas aleatórios
            | companySuffix() - Gera abreviações de nome de empresas aleatórios
            | password() - Gera senhas aleatórias
            */
            'nome' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'cnpj' => $this->faker->companySuffix(),
            'senha' => $this->faker->password(6,8)
        ];
    }
}
