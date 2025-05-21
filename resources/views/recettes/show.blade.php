<x-layout>
    <h1>{{ $recette['title'] }}</h1>

    <p>{{ $recette['description'] }}</p>

   <ul>
        @foreach($recette['ingredients'] as $key => $ingredient)
            <li>{{ $ingredient }}</li>
        @endforeach
    </ul>

    <p>{{ $recette['instructions'] }}</p>

</x-layout>
