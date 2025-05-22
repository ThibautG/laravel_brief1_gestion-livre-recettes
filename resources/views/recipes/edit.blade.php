<x-layout>
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('recipes.update', $recipe->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $recipe->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Description</label>
            <textarea name="content" class="form-control" required>{{ $recipe->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
{{--@endsection --}}
</x-layout>
