<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeWithIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = Ingredient::factory()->count(50)->create();

        Recipe::factory()
            ->count(20)
            ->withUser()
            ->create()
            ->each(function (Recipe $recipe) use ($ingredients) {
                // Attach between 2 and 6 ingredients to each recipe
                $recipe->ingredients()->attach(
                    $ingredients->random(rand(2, 6))->pluck('id'),
                );
            });
    }
}
