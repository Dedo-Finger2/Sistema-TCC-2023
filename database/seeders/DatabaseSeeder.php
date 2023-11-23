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
        \App\Models\User::factory(10)->create();
        // \App\Models\Company::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        \App\Models\Feedback::factory(10)->create();
        \App\Models\BusOutbound::factory(5)->create();
        \App\Models\BusInbound::factory(5)->create();
        \App\Models\Route::factory(25)->create();
        \App\Models\Bus::factory(10)->create();
        \App\Models\Itinerary::factory(10)->create();
        \App\Models\RequestedLocation::factory(10)->create();
        \App\Models\Request::factory(10)->create();
        \App\Models\UserOrigin::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
