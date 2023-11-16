<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Endereco::factory(5)->create();
        \App\Models\Usuario::factory(5)->create();
        \App\Models\Empresa::factory(5)->create();
        \App\Models\Onibus::factory(5)->create();
        \App\Models\VoltaOnibus::factory(5)->create();
        \App\Models\IdaOnibus::factory(5)->create();
        \App\Models\Rota::factory(25)->create();
        \App\Models\Itinerario::factory(5)->create();
        \App\Models\Feedback::factory(5)->create();
        \App\Models\LocalRequisitado::factory(5)->create();
        \App\Models\Requisicao::factory(5)->create();
        \App\Models\OrigemUsuario::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
