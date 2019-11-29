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

function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT ID, Title, Lead, Content, Date_publish FROM posts');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}
