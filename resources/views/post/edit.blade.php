@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<h1 class="my-4">Edit Post: {{ $post->title }}</h1>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="titleInput" class="form-label">Title</label>
        <input
            type="text"
            name="title"
            id="titleInput"
            class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $post->title) }}"
        >
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="contentInput" class="form-label">Content</label>
        <textarea
            name="content"
            id="contentInput"
            class="form-control @error('content') is-invalid @enderror"
            rows="5"
        >{{ old('content', $post->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Post</button>

    <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary ms-2">Cancel</a>
</form>

@endsection
