<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drug>
 */
class DrugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "drug_name"=>fake()->text("8"),
            "type" =>fake()->text('5'),
            "stock" =>fake()->numerify("#"),
            "price" =>fake()->numerify("##"),
        ];
    }
}
