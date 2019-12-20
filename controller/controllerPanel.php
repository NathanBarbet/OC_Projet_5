<?php

require_once('model/Post.php');

class controllerPanel {

  private $post;

  public function __construct() {
    $this->post = new post();
  }

  public function listPostsPanel() {
    $posts = $this->post->getPostsPanel();
    require('view/frontend/panel_post.php');
  }

  public function delPostPanel() {
    $post = new Post();
    $postId = $_GET['ID'];
    $post = $post->delPostPanel($postId);

    header('location: panel');
  }

  public function addPostPanel() {
    $title = $_POST['Title'];
    $post_lead = $_POST['Post_lead'];
    $content = $_POST['Content'];
    $img = $_POST['Img'];

    $Post = new Post;
    $Post->setTitle($title);
    $Post->setPost_lead($post_lead);
    $Post->setContent($content);
    $Post->setImg($img);

    $Post->addPostPanel();

    header('Location: panel');
  }

  public function publishPost() {

    $post = new Post();
    $postId = $_GET['ID'];
    $post = $post->publishPost($postId);

    header('Location: panel');
  }

  public function pausePost() {

    $post = new Post();
    $postId = $_GET['ID'];
    $post = $post->pausePost($postId);

    header('Location: panel');
  }
}
