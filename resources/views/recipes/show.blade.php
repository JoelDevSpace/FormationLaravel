    <x-layout>
        <h1>{{ $recipe->title }}</h1>
        <h2>Ingrédients :</h2>
        <ul class="my-4">
            @foreach ($recipe->ingredients as $ingredient)
                <li>{{ $ingredient->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('recipes.index') }}">Retour aux recettes</a>
    </x-layout>
