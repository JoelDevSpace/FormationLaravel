<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;



Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/recipes', function () {
    $recipes = Recipe::all();

    return view('recipes.index', compact('recipes'));
})->name('recipes.index');

Route::get('/recipe/{id}', function ($id) {
    $recipe = Recipe::findOrFail($id);

    return view('recipes.show', compact('recipe'));
})->name('recipes.show');
