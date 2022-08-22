<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'user_id' => 1,
            'proprietor' => fake()->name,
            'category_id'=> fake()->numberBetween(1,6),
            'primary_contact' =>fake()->phoneNumber(),
            'secondary_contact' =>fake()->phoneNumber(),
            'description' => fake()->text,
            'email' => fake()->email(),
            'website' => fake()->freeEmailDomain(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'pin_code' => fake()->postcode(),
            'images' =>"https://picsum.photos/400?random=".fake()->numberBetween(1,9999),
        ];
    }
}
