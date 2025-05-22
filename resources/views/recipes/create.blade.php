<x-layout>
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    <div class="container">
        <h1>Create Recipe</h1>
        <form action="{{ route('recipes.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
{{--@endsection--}}
</x-layout>
