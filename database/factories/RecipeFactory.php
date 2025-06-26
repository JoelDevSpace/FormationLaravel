<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\[Recipe]>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->words(random_int(3, 9), true);

        return [
            'title' => Str::title($title),
            'user_id' => fake()->boolean() ? User::factory()->create()->id : null,
        ];
    }
    public function withUser(): static
    {
        return $this->state(fn(array $attributes) => [
            'user_id' => User::factory(),
        ]);
    }
}
