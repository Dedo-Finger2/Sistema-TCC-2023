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
        \App\Models\Address::factory(5)->create();
        \App\Models\User::factory(5)->create();
        // \App\Models\Company::factory(50)->create();
        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        \App\Models\Feedback::factory(5)->create();
        \App\Models\BusOutbound::factory(50)->create();
        \App\Models\BusInbound::factory(50)->create();
        \App\Models\Route::factory(200)->create();
        // \App\Models\Bus::factory(5)->create();
        \App\Models\Itinerary::factory(3)->create();
        \App\Models\RequestedLocation::factory(10)->create();
        \App\Models\Request::factory(10)->create();
        \App\Models\UserOrigin::factory(10)->create();
        \App\Models\ItineraryHasRoute::factory(300)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
