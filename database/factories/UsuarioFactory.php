<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $idsEndereco = Endereco::all()->pluck('id_endereco');

        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->email(),
            'senha' => $this->faker->password(6, 8),
            'id_endereco' => $this->faker->randomElement($idsEndereco),
        ];
    }
}
