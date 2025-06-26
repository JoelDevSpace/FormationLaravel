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
            $table->timestamps();
        });

        // Ajout des données initiales
        /*$recipes = [
            1 => ['title' => 'Spaghetti Carbonara'],
            2 => ['title' => 'Poulet Curry'],
            3 => ['title' => 'Sauté de légumes']
        ];*/

        /*foreach ($recipes as $recipe) {
            DB::table('recipes')->insert([
                'title' => $recipe['title'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
