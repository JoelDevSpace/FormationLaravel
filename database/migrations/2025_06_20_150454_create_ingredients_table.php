<?php

use App\Models\Recipe;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Ajout des données initiales
        $ingredients = [
            1 => ['name' => 'Pâtes'],
            2 => ['name' => 'Oeufs'],
            3 => ['name' => 'Fromage'],
            4 => ['name' => 'Lardons'],
            5 => ['name' => 'Poulet'],
            6 => ['name' => 'Lait de coco'],
            7 => ['name' => 'Curry'],
            8 => ['name' => 'Brocoli'],
            9 => ['name' => 'Carottes'],
            10 => ['name' => 'Sauce soja'],
            11 => ['name' => 'Ail']
        ];

        foreach ($ingredients as $ingredient) {
            DB::table('ingredients')->insert([
                'name' => $ingredient['name']
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
