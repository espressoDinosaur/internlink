<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intern>
 */
class InternFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null, // link this manually in seeder
            'first_name' => $this->faker->firstName(),
            'mid_name' => $this->faker->optional()->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthdate' => $this->faker->date('Y-m-d', '2002-01-01'), // interns ~18-25 years
            'contact_no' => $this->faker->phoneNumber(),
            'profile_desc' => $this->faker->paragraph(),
        ];
    }
}
