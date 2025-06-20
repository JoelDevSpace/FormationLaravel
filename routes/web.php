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
    $model = new Recipe();
    $recipes = $model->getAll();

    return view('recipes.index', compact('recipes'));
})->name('recipes.index');

Route::get('/recipe/{id}', function ($id) {
    $model = new Recipe();
    $recipe = $model->retrieve($id);

    return view('recipes.show', compact('recipe'));
})->name('recipes.show');
