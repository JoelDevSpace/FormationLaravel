<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Recipe extends Model
{
    public function getAll(): array
    {
        return [
            1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pâtes', 'Oeufs', 'Fromage', 'Lardons']],
            2 => ['title' => 'Poulet Curry', 'ingredients' => ['Poulet', 'Lait de coco', 'Curry']],
            3 => ['title' => 'Sauté de légumes', 'ingredients' => ['Brocoli', 'Carottes', 'Sauce soja', 'Ail']]
        ];
    }

    public function retrieve(int $id): array
    {
        $recipes = $this->getAll();
        return Arr::get($recipes, $id, ['title' => 'Recette non trouvée', 'ingredients' => []]);
    }

}
