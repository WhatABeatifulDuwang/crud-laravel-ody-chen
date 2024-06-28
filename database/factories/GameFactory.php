<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $games = ['Valorant', 'Minecraft', 'Roblox', 'League of Legends', 'CSGO', 'Overwatch', 'OSRS'];
        return [
            'name' => $games[array_rand($games)],
            'release_year' => $this->faker->numberBetween(1991, 2024),
            'price' => $this->faker->randomFloat(2, 0, 60)
        ];
    }
}
