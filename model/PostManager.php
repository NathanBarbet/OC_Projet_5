<?php
require_once("model/Db.php");

class PostManager extends Db
{
    public function getPosts()
    {
        $sql = 'SELECT ID AS postId, Title AS title, Post_lead AS post_lead, Content AS content, Img AS img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM posts WHERE Post_statut_ID = 1 ORDER BY Date_publish DESC LIMIT 0, 6';
        $requete = $this->executerRequete ($sql);
        $posts = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Post');
        return $posts;
    }

    public function getPost($postId)
    {
        $sql = 'SELECT ID, Title, Post_lead, Content, Img, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts WHERE ID = ? AND Post_statut_ID = 1';
        $requete = $this->executerRequete ($sql, array($postId));
        if ($requete->rowCount() == 1)
          return $requete->fetch();
        else
          throw new Exception ("Aucun post");
    }

    public function getPostsPanel()
    {
        $sql = 'SELECT posts.ID, Title, Post_lead, Content, Img, Post_statut, Post_statut_ID, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM posts INNER JOIN posts_statut ON posts.Post_statut_ID = posts_statut.ID ORDER BY Date_publish';
        $requete = $this->executerRequete ($sql);
        return $requete;
    }

    public function delPostPanel($postId)
    {
        $sql = 'DELETE FROM posts WHERE ID = ?';
        $requete = $this->executerRequete ($sql, array($postId));
        return $requete;
    }

    public function publishPost($postId)
    {
        $sql = 'UPDATE posts SET Post_statut_ID = 1 WHERE ID = ?';
        $requete = $this->executerRequete($sql, array($postId));
        return $requete;
    }

    public function pausePost($postId)
    {
        $sql = 'UPDATE posts SET Post_statut_ID = 2 WHERE ID = ?';
        $requete = $this->executerRequete($sql, array($postId));
        return $requete;
    }
}
