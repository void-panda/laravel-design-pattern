<?php

namespace App\Repositories;

use App\Interfaces\PostInterface;
use App\Models\Post;

class PostRepository implements PostInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getPosts()
    {
      return Post::all();
    }

    public function getPost($id)
    {
      return Post::find($id);
    }

    public function savePost($request)
    {
      $post = Post::create($request->all());
      return $post;
    }

    public function updatePost($request, Post $post)
    {
      $post->title = $request->title;
      $post->content = $request->content;
      $post->save();
      return $post;
    }

    public function deletePost($id)
    {
      $post = Post::find($id);
      $post->delete();
      return $post;
    }
}
