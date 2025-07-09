<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    // protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'phone_number' => fake()->unique()->numerify('09#########'),
            'sex' => fake()->randomElement(['Male', 'Female']),
            'civil_status' => fake()->randomElement(['Single', 'Married', 'Divorced', 'Widowed']),
            'present_address' => fake()->address(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }

    /*
     * Indicate that the model's email address should be unverified.
     */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}