<?php
require_once("model/DbManager.php");

class PostManager extends DbManager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $posts = $db->query('SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts ORDER BY Date_publish DESC LIMIT 0, 5');

        return $posts;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $posts = $db->prepare('SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts WHERE ID = ?');
        $posts->execute(array($postId));
        $post = $posts->fetch();

        return $post;
    }
}
