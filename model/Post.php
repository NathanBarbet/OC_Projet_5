<?php
require_once("model/Db.php");

class Post extends Db
{
    public function getPosts()
    {
        $sql = 'SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts ORDER BY Date_publish DESC LIMIT 0, 5';
        $posts = $this->executerRequete ($sql);
        return $posts;
    }

    public function getPost($postId)
    {
        $sql = 'SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts WHERE ID = ?';
        $post = $this->executerRequete ($sql, array($postId));
        if ($post->rowCount() == 1)
          return $post->fetch();
        else
          throw new Exception ("Aucun post");
    }
}
