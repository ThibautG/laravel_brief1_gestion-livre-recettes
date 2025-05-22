<x-layout>
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    <div class="container">
        <h1>Edit Post</h1>
        <form method="POST" action="{{ route('recipes.update', $recipe->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $recipe->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required >{{ $recipe->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
{{--@endsection --}}
</x-layout>
