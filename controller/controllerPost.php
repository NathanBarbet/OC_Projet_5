<?php

require_once('model/Post.php');
require_once('model/Comment.php');

  class controllerPost {

    private $post;
    private $comment;

    public function __construct() {
      $this->post = new post() ;
      $this->comment = new comment() ;
    }

    public function getPost() {

      $post = new Post();
      $postId = $_GET['ID'];
      $post = $post->getPost($postId);

      $comments = new Comment();
      $postId = $_GET['ID'];
      $comments = $comments->getComments($postId);

      require('view/frontend/post.php');
    }

    public function addComment() {
      $postId = $_GET['ID'];
      $author = $_SESSION['ID'];
      $comment = $_POST['comment'];

      $Comment = new Comment;
      $Comment->setPostId($postId);
      $Comment->setAuthor($author);
      $Comment->setComment($comment);

      $Comment->addComment();

      header('Location: post_' . $postId);
    }
  }
