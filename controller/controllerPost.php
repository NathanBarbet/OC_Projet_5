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

    public function post($postId) {
      $post = $this->post->getPost($postId);
      $comments = $this->comment->getComments($postId);
      require('view/frontend/post.php');
    }

    public function addComment($postId, $author, $comment) {
      $affectedLines = $this->comment->postComment($postId, $author, $comment);
      if ($affectedLines === false) {
          throw new Exception('Impossible d\'ajouter le commentaire !');
      }
      else {
          header('Location: index.php?action=post&ID=' . $postId);
      }
    }
  }
