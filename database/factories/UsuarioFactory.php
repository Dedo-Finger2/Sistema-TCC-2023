<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idEnderecos = Endereco::all()->pluck('id_endereco');

        return [
            /*
            | ----------------------------------------------
            | Explicação
            | ----------------------------------------------
            | A estrutura para usar as factories é a seguinte:
            | 'coluna' => $this->faker->método(parâmetro),
            | ----------------------------------------------
            | nome() - Gera um nome aleatório
            | email() - Gera um endereço de e-mail válido
            | senha() - Gera uma senha criptografada aleatória
            */
            'nome' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'senha' => $this->faker->password(6, 8),
            'id_endereco' => $this->faker->randomElement($idEnderecos),
            '_token' => Str::random(16),
        ];
    }
}
