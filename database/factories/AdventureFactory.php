<?php

namespace Database\Factories;

use DateTime;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adventure>
 */
class AdventureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $destinations = Destination::pluck('id')->toArray();
        return [
            'title' => fake()->sentence(),
            'desc' => fake()->realText($maxNbChars = 10000, $indexSize = 2),
            'destination_id' => fake()->randomElement($destinations),
        ];
    }
}
