<?php

namespace App\Interfaces;

use App\Models\Post;

interface PostInterface
{
  public function getPosts();
  public function getPost($id);
  public function savePost($request);
  public function updatePost($request, Post $post);
  public function deletePost($id);
}
