    <x-layout>
        <h1>Recettes</h1>
        <ul>
            @foreach ($recipes as $key => $recipe)
                <li>
                    <a href="{{ route('recipes.show', $key) }}">{{ $recipe['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </x-layout>
