<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "dr_name"=>fake()->name(),
            "specialist" =>fake()->numberBetween($min = 1 ,$max = 10),
            "room_no"=>fake()->numerify('###'),
            "date_time"=>fake()->dateTime(),
        ];
    }
}
