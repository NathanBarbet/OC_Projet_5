<?php

require_once('model/Post.php');

class controllerHome {

  private $post;

  public function __construct() {
    $this->post = new post();
  }

  public function listPosts() {
    $posts = $this->post->getPosts();
    require('view/frontend/home.php');
  }
}
