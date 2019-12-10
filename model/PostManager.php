<?php
require_once("model/DbManager.php");

class PostManager extends DbManager
{

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts ORDER BY Date_publish DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts WHERE ID = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
}
