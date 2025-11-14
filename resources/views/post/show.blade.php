@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <div class="card my-4">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">
                Author: **{{ $post->author }}**
            </h6>

            <h1 class="card-title text-primary mb-3">{{ $post->title }}</h1>

            <div class="card-text border-top pt-3">
                <p>{{ $post->content }}</p>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                &larr; Back to All Posts
            </a>

            <div>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary me-2">
                    Edit
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this post?');">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
