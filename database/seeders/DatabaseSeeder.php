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
        \App\Models\Address::factory(25)->create();
        \App\Models\User::factory(5)->create();
        // \App\Models\Company::factory(25)->create();
        // $this->call(AdminSeeder::class);
        // $this->call(UserSeeder::class);
        \App\Models\Feedback::factory(25)->create();
        \App\Models\BusOutbound::factory(25)->create();
        \App\Models\BusInbound::factory(25)->create();
        \App\Models\Route::factory(25)->create();
        // \App\Models\Bus::factory(5)->create();
        \App\Models\Itinerary::factory(25)->create();
        \App\Models\RequestedLocation::factory(25)->create();
        \App\Models\Request::factory(25)->create();
        \App\Models\UserOrigin::factory(25)->create();
        \App\Models\ItineraryHasRoute::factory(25)->create();

        \App\Models\Company::factory()->create([
            "nome" => "admin",
            "email" => "admin@admin.com",
            "password" => bcrypt("123"),
            "cnpj" => "12.345.678/9012-34",
        ]);

        \App\Models\User::factory()->create([
            "nome" => "Usuario",
            "email" => "user@user.com",
            "password" => bcrypt("123"),
            "address_id" => 1,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
