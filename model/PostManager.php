<?php
require_once("model/Db.php");

class PostManager extends Db
{
    public function getPosts()
    {
        $sql = 'SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts ORDER BY Date_publish DESC LIMIT 0, 5';
        $requete = $this->executerRequete ($sql);
        return $requete;
    }

    public function getPost($postId)
    {
        $sql = 'SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts WHERE ID = ?';
        $requete = $this->executerRequete ($sql, array($postId));
        if ($requete->rowCount() == 1)
          return $requete->fetch();
        else
          throw new Exception ("Aucun post");
    }
}
