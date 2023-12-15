<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $bairros = [
        //     'Piacaveira',
        //     'Arembepe',
        //     'Phoc III',
        //     'Vilaa d Abrantes',
        //     'Dois d Julho',
        //     'Santo Antônio',
        //     'Monte Gordo',
        //     'Areias',
        //     'Catu d Abrantes',
        //     'Ponto Certo',
        //     'Nova Vitoria',
        //     'Barra do Jacuipe',
        //     'Verde Horizonte',
        //     'Gleba B',
        //     'Camacari d Dentro',
        //     'Novo Horizonte',
        //     'Gleba E',
        //     'Barra d Pojuca',
        //     'Buri Satuba',
        //     'Vilaa da Paz',
        //     'Gravata',
        //     'Parque Florestal',
        //     'Buri d Abrantes',
        //     'Parafuso',
        //     'Parque das Mangabas',
        //     'Ficam II',
        //     'Phoc II',
        //     'Parque Verde',
        //     'Jaua',
        //     'Cajazeiras',
        //     'Machadinho'
        // ];

        // foreach ($bairros as $bairro) {
        //     Address::factory()->create([
        //     'logradouro' => 'defaut',
        //         'bairro' => $bairro,
        //         'cidade' => 'camaçari'
        //     ]);
        // }

        \App\Models\Company::factory()->create([
            "nome" => "admin",
            "email" => "admin@admin.com",
            "password" => bcrypt("123"),
            "cnpj" => "12.345.678/9012-34",
        ]);

        \App\Models\Address::factory(25)->create();
        \App\Models\User::factory()->create([
            "nome" => "Usuario",
            "email" => "user@user.com",
            "password" => bcrypt("123"),
            "address_id" => 1,
        ]);
        \App\Models\User::factory(1)->create();
        // \App\Models\Company::factory(25)->create();
        // $this->call(AdminSeeder::class);
        // $this->call(UserSeeder::class);
        \App\Models\Feedback::factory(1)->create();
        \App\Models\BusOutbound::factory(10)->create();
        \App\Models\BusInbound::factory(10)->create();
        \App\Models\Route::factory(900)->create();
        // \App\Models\Bus::factory(5)->create();
        \App\Models\Itinerary::factory(3)->create();
        \App\Models\RequestedLocation::factory(100)->create();
        \App\Models\Request::factory(100)->create();
        \App\Models\UserOrigin::factory(100)->create();
        \App\Models\ItineraryHasRoute::factory(300)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
