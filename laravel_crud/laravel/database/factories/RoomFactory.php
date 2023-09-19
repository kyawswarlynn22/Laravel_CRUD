<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "room_no" =>fake()->numerify("###"),
            "status" =>fake()->numberBetween($min = 0 ,$max = 2),
            "person" =>fake()->numberBetween($min = 0 ,$max = 4),
            "price" =>fake()->numerify("##"),
                ];
    }
}
