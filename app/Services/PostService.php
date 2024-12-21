<?php

namespace App\Services;

use App\Interfaces\PostInterface;
use App\Models\Post;

class PostService
{
    protected $postInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(PostInterface $postInterface)
    {
        $this->postInterface = $postInterface;
    }

    function getPosts() {
      return $this->postInterface->getPosts();
    }

    function getPost($id) {
      return $this->postInterface->getPost($id);
    }

    function savePost($data) {
      $this->postInterface->savePost($data);
      return redirect()
        ->route('posts.index')
        ->with('success', 'Post created successfully');
    }

    function updatePost($request, Post $post) {
      $this->postInterface->updatePost($request, $post);
      return redirect()
        ->route('posts.index')
        ->with('success', 'Post updated successfully');
    }

    function deletePost($id) {
      $this->postInterface->deletePost($id);
      return redirect()
        ->route('posts.index')
        ->with('success', 'Post deleted successfully');
    }
}
