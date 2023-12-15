<?php

namespace Tests\Unit;

use SebastianBergmann\Type\VoidType;
use Tests\TestCase;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Testar se os dados vindos do formulário de cadastro estão sendo enviados para o banco de dados
     *
     * @test
     * @return void
     */
    public function test_user_data_sent_to_database(): void
    {
        // Semear o banco
        Artisan::call("db:seed");

        // Pega o primeiro endereço
        $address = Address::first();

        // Gera dados falsos
        $data = [
            'nome' => 'Teste',
            'email' => 'email2@example.com',
            'password' => bcrypt('123456'),
            'address_id' => $address->id,
        ];

        $response = $this->post('/registerUser', $data);

        // Validar se a resposta da rota foi válida
        $response->assertStatus(302);

        // Validar se os dados estão no banco
        $this->assertDatabaseHas('users', [
            'nome' => 'Teste',
            'email' => 'email2@example.com',
            'address_id' => $address->id,
        ]);
    }

    public function test_user_autenticate(): void
    {
        // Cria um endereço de teste
        $address = Address::factory()->create([
            'logradouro' => 'Teste123',
            'bairro' => 'Teste',
            'cidade' => "Camaçari",
        ]);

        // Cria novo usuário
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => '123',
            'address_id' => $address->id,
        ]);

        // Envia os dados para a rota de login
        $this->post("/login", [
            'email' => $user->email,
            'password' => '123',
        ]);

        // Verifica se o usuário está autenticado como usuário
        $this->assertAuthenticatedAs($user, "web");
    }
}
