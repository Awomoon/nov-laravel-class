<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
      $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'author' => 'required',
          'title' => 'required',
          'content' => 'required',
      ]);
        Post::create($request->only('author', 'title', 'content'));
        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    public function show(Post $post){
      return view('post.show', compact('post'));
    }

    public function edit(Post $post){
      return view('post.edit', compact('post'));
    }

  public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|min:3',
        'content' => 'required|min:10',
    ]);

    $post->update($request->only('title', 'content'));

    return redirect()->route('posts.index')
                     ->with('success', 'Post updated successfully!');
}
  public function destroy(Post $post)
  {
      $post->delete();
      return redirect()->route('posts.index')
                       ->with('success', 'Post deleted successfully!');
  }

}
