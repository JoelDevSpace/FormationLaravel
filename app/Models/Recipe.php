<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Recipe extends Model
{
    //permet de dire que quand on va chercher un champ ingredients, on le transforme en tableau
    protected $casts = [
        'ingredients' => 'array',
        //'is_published' => 'boolean', autres examples de types
        //'published_at' => 'datetime'
    ];

}
