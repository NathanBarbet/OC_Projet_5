<?php

require_once('model/Post.php');
require_once('model/Comment.php');

function listPosts()
{
    $post = new Post(); // Création d'un objet
    $posts = $post->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/home.php');
}

function post()
{
    $post = new Post();
    $comment = new Comment();

    $post = $post->getPost($_GET['ID']);
    $comments = $comment->getComments($_GET['ID']);

    require('view/frontend/post.php');
}

function addComment($postId, $author, $comment)
{
    $comment = new Comment();

    $affectedLines = $comment->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&ID=' . $postId);
    }
}
