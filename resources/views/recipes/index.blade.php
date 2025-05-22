<x-layout>
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    <div class="container">
        <h1>Recipe Manager</h1>
        <a href="{{ route('recipes.create') }}" class="btn btn-primary mb-3">Create Recipe</a>

        @if ($recipes->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->title }}</td>
                        <td>{{ $recipe->description }}</td>
                        <td>
                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No recipes available.</p>
        @endif
    </div>
{{--@endsection--}}
</x-layout>
