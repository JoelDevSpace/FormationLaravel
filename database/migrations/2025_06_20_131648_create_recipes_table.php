<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('ingredients');
            $table->timestamps();
        });

        // Ajout des données initiales
        $recipes = [
            1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pâtes', 'Oeufs', 'Fromage', 'Lardons']],
            2 => ['title' => 'Poulet Curry', 'ingredients' => ['Poulet', 'Lait de coco', 'Curry']],
            3 => ['title' => 'Sauté de légumes', 'ingredients' => ['Brocoli', 'Carottes', 'Sauce soja', 'Ail']]
        ];

        foreach ($recipes as $recipe) {
            DB::table('recipes')->insert([
                'title' => $recipe['title'],
                'ingredients' => json_encode($recipe['ingredients'])
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
