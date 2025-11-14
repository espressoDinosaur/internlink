<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'role' => 'user', // default role
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'), // default password
            'status' => 'active',
            'profile_photo_path' => null,
        ];
    }

    // --- Custom state for intern ---
    public function intern(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'intern',
            'email' => 'intern@internlink.com',
            'password' => Hash::make('password123'),
            'profile_photo_path' => 'profiles/image1.png',
        ]);
    }

    // --- Custom state for recruiter ---
    public function recruiter(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'recruiter',
            'email' => 'recruiter@internlink.com',
            'password' => Hash::make('password123'),
            'profile_photo_path' => 'profiles/image2.png',
        ]);
    }
}
