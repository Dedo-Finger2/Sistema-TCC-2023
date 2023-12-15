<?php

namespace Tests\Feature;

use App\Http\Controllers\RouteController;
use App\Models\BusInbound;
use App\Models\BusOutbound;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorMessagesTest extends TestCase
{

    public function test_incorrect_email_and_password_on_login_page(): void
    {
        $response = $this->post('/login', [
            'email' => 'naoexiste@com.br',
            'password' => '12345',
        ]);

        $response->assertRedirect('/login')
            ->assertSessionHas('error');
    }

    public function test_route_not_found(): void
    {
        $requestData = [
            'busOutbound' => 999, // ID de endereço inválido
            'busInbound' => 888, // ID de endereço inválido
        ];

        $response = $this->post('/search', $requestData);

        $response->assertRedirect('/search')
            ->assertSessionHas('error');

    }
}
