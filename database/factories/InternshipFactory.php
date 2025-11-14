<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Internship;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internship>
 */
class InternshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_category' => $this->faker->randomElement(['Engineering', 'Marketing', 'Design', 'Finance', 'HR']),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'salary' => $this->faker->numberBetween(1000, 5000),
            'salary_freq' => $this->faker->randomElement(['monthly', 'weekly']),
            'status' => 'open',
        ];
    }
}
