<?php

require_once 'model/Post.php';

class controllerPanel {

  private $post;
  private $comment;
  private $user;

  public function __construct() {
    $this->post = new post();
    $this->comment = new comment();
    $this->user = new user();
  }

  public function listPostsPanel() {
    $posts = $this->post->getPostsPanel();
    require 'view/backend/panel_posts.php';
  }

  public function listUsersPanel() {
    $users = $this->user->getUsersPanel();
    require 'view/backend/panel_users.php';
  }

  public function delUserPanel() {

    $user_ID = $_GET['ID'];
    $user = $this->user->delUserPanel($user_ID);

    header('location: panel_users');
  }

  public function getPostPanel() {

    $postId = $_GET['ID'];
    $post = $this->post->getPost($postId);
    require 'view/backend/panel_editpost.php';
  }

  public function listCommentsPanel() {
    $comments = $this->comment->getCommentsPanel();
    require 'view/backend/panel_comments.php';
  }

  public function delPostPanel() {

    $postId = $_GET['ID'];
    $post = $this->post->delPostPanel($postId);

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

  public function editPostPanel() {
    $title = $_POST['Title'];
    $post_lead = $_POST['Post_lead'];
    $content = $_POST['Content'];
    $img = $_POST['Img'];
    $postId = $_GET['ID'];

    $Post = new Post;
    $Post->setTitle($title);
    $Post->setPost_lead($post_lead);
    $Post->setContent($content);
    $Post->setImg($img);

    $Post->editPostPanel($postId, $title, $post_lead, $content, $img);

    header('Location: panel');
  }

  public function publishPost() {

    $postId = $_GET['ID'];
    $post = $this->post->publishPost($postId);

    header('Location: panel');
  }

  public function pausePost() {

    $postId = $_GET['ID'];
    $post = $this->post->pausePost($postId);

    header('Location: panel');
  }

  public function delCommentPanel() {

    $comments = new Comment();
    $commentId = $_GET['ID'];
    $comments = $comments->delCommentPanel($commentId);

    header('location: panel_comments');
  }

  public function publishComment() {

    $comments = new Comment();
    $commentId = $_GET['ID'];
    $comments = $comments->publishComment($commentId);

    header('Location: panel_comments');
  }

  public function pauseComment() {

    $comments = new Comment();
    $commentId = $_GET['ID'];
    $comments = $comments->pauseComment($commentId);

    header('Location: panel_comments');
  }

}
