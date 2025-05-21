<x-layout>
    <h1>Mes recettes</h1>

    <ul>
    @foreach($recettes as $key => $recette)

        <li><a href="{{ route('recettes.show', $key) }}">
                {{ $recette['title'] }}
            </a></li>

    @endforeach
    </ul>

</x-layout>
