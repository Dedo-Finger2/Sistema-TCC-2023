<?php

namespace Database\Factories;

use App\Models\Itinerary;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItineraryHasRoute>
 */
class ItineraryHasRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $itineraries = Itinerary::all()->pluck('id');
        $routes = Route::all()->pluck('id');

        return [
            'itinerary_id' => $this->faker->randomElement($itineraries),
            'route_id' => $this->faker->randomElement($routes),
        ];
    }
}
