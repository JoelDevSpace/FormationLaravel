<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    //permet de dire que quand on va chercher un champ ingredients, on le transforme en tableau
    //protected $casts = [
    //'ingredients' => 'array',
    //'is_published' => 'boolean', autres examples de types
    //'published_at' => 'datetime'
    //];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Inconnu'
        ]);
        // withDefault permet de dire que si l'utilisateur n'existe pas, on retourne un utilisateur avec le nom "Inconnu"
    }
    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
