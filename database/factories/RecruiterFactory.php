<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recruiter>
 */
class RecruiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null, // link manually in seeder
            'company_name' => $this->faker->company(),
            'size' => $this->faker->randomElement(['Small', 'Medium', 'Large']),
            'about' => $this->faker->paragraph(),
            'industry' => $this->faker->randomElement(['Technology', 'Finance', 'Healthcare', 'Marketing']),
            'contact_person' => $this->faker->name(),
            'contact_number' => $this->faker->phoneNumber(),
            'title' => $this->faker->jobTitle(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
        ];
    }
}
