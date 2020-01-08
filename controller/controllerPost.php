<?php

require_once 'model/Post.php';
require_once 'model/Comment.php';

  class controllerPost {

    private $post;
    private $comment;

    public function __construct() {
      $this->post = new Post() ;
      $this->comment = new Comment() ;
    }

    public function getPost() {

      $postId = $_GET['ID'];
      $post = $this->post->getPost($postId);

      $postId = $_GET['ID'];
      $comments = $this->comment->getComments($postId);
      require 'view/frontend/post.php';
    }

    public function listAllPosts() {
      $posts = $this->post->getAllPosts();
      require 'view/frontend/allposts.php';
    }

    public function addComment() {
      $postId = $_GET['ID'];
      $author = $_SESSION['ID'];
      $content = $_POST['comment'];

      $Comment = new Comment;
      $Comment->setPostId($postId);
      $Comment->setAuthor($author);
      $Comment->setContent($content);

      $Comment->addComment();

      header('Location: post_' . $postId);
    }
  }
