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
    $req = $db->query('SELECT ID, Title, Content, Date_publish FROM posts ORDER BY Date_publish DESC LIMIT 0, 5');

    return $req;
}
