<?php

require('model/model.php');

function listPosts()
{
    $posts = getPosts();

    require('view/template.php');
}

function post()
{
    $post = getPost($_GET['ID']);
    $comments = getComments($_GET['ID']);

    require('view/postView.php');
}
