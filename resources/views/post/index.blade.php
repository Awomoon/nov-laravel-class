@extends('layouts.app')

@section('title', 'All Posts')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            Create New Post
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <ul class="list-group">
        @forelse($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none text-dark fw-bold">
                    {{ $post->title }}
                </a>

                <div>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-secondary me-2">
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
            </li>
        @empty
            <li class="list-group-item">
                No posts found.
            </li>
        @endforelse
    </ul>

@endsection
