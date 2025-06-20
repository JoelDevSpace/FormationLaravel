<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/recipes', function () {
    $recipes = [
        1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pâtes', 'Oeufs', 'Fromage', 'Lardons']],
        2 => ['title' => 'Poulet Curry', 'ingredients' => ['Poulet', 'Lait de coco', 'Curry']],
        3 => ['title' => 'Sauté de légumes', 'ingredients' => ['Brocoli', 'Carottes', 'Sauce soja', 'Ail']]
    ];

    return view('recipes.index', compact('recipes'));
})->name('recipes.index');

Route::get('/recipe/{id}', function ($id) {
    $recipes = [
        1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pâtes', 'Oeufs', 'Fromage', 'Lardons']],
        2 => ['title' => 'Poulet Curry', 'ingredients' => ['Poulet', 'Lait de coco', 'Curry']],
        3 => ['title' => 'Sauté de légumes', 'ingredients' => ['Brocoli', 'Carottes', 'Sauce soja', 'Ail']]
    ];

    $recipe = Arr::get($recipes, $id, ['title' => 'Recette non trouvée', 'ingredients' => []]);

    return view('recipes.show', compact('recipe'));
})->name('recipes.show');
