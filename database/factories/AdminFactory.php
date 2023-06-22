<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'username' => fake()->username(),
            'jenis_kelamin' => fake()->randomElement(['L', 'P']),
            'no_hp' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'tgl_lahir' => fake()->date(),
        ];
    }
}
