<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'address' => $this->faker->address(),
            'photos'  => $this->faker->image('public/assets/images', 400, 300),
            'user_id' => $this->faker->rand(1, User::count()),
        ];
    }
}
