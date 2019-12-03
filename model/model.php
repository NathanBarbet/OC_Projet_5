<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=oc_projet_5;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT ID, Title, Content, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts ORDER BY Date_publish DESC LIMIT 0, 5');

    return $req;
}

function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT ID, Title, Content, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts WHERE ID = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT ID, User_ID, Content, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM comments WHERE Post_ID = ? ORDER BY Date_publish DESC');
    $comments->execute(array($postId));

    return $comments;
}
