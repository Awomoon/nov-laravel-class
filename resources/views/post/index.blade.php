@extends('layouts.app')

@section('title', 'Posts')

@section('content')
  <h1>Posts</h1>
  <div>
    @forelse($posts as $post)
    <div>
      <h2>{{ $post->title }}</h2>
      <p><strong>Author:</strong> {{ $post->author }}</p>
      <p>{{ $post->content }}</p>
    </div>
    @empty
    <p>No posts available.</p>
    @endforelse
  </div>
@endsection
