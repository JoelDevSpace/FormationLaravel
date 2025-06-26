<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
use App\Models\Ingredient;


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/recipes', function () {
    $recipes = Recipe::all();

    return view('recipes.index', compact('recipes'));
})->name('recipes.index');

Route::get('/recipe/{id}', function ($id) {
    $recipe = Recipe::findOrFail($id);

    return view('recipes.show', compact('recipe'));
})->name('recipes.show');

/*Route::get('/attach', function () {
    $ingredients = [
        1 => ['name' => 'Pates', 'recipe_id' => 1],
        2 => ['name' => 'Oeufs', 'recipe_id' => 1],
        3 => ['name' => 'Fromage', 'recipe_id' => 1],
        4 => ['name' => 'Lardons', 'recipe_id' => 1],
        5 => ['name' => 'Poulet', 'recipe_id' => 2],
        6 => ['name' => 'Lait de coco', 'recipe_id' => 2],
        7 => ['name' => 'Curry', 'recipe_id' => 2],
        8 => ['name' => 'Brocoli', 'recipe_id' => 3],
        9 => ['name' => 'Carottes', 'recipe_id' => 3],
        10 => ['name' => 'Sauce soja', 'recipe_id' => 3],
        11 => ['name' => 'Ail', 'recipe_id' => 3],
    ];

    foreach ($ingredients as $key => $ingredient) {
        $recipe = Recipe::find($ingredient['recipe_id']);
        $recipe->ingredients()->attach($key);
    }
    dd('ok');

});*/
