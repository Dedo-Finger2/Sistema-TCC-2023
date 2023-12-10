<?php

namespace Tests\Unit;

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
}
