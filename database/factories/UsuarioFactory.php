<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idEnderecos = Endereco::all()->pluck('id');

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
            'email' => $this->faker->email(),
            'senha' => $this->faker->password(),
            'id_endereco' => $this->faker->randomElement($idEnderecos),
        ];
    }
}
