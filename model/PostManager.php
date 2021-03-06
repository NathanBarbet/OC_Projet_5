<?php
require_once("model/Db.php");

class PostManager extends Db
{
    public function getPosts()
    {
        $sql = 'SELECT ID AS postId, Title AS title, Post_lead AS post_lead, Content AS content, Img AS img, Author AS author, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr, DATE_FORMAT(Date_modify, \'%d/%m/%Y à %Hh%imin%ss\') AS date_modify_fr FROM posts WHERE Post_statut_ID = 1 ORDER BY Date_modify DESC LIMIT 0, 6';
        $requete = $this->executerRequete ($sql);
        $posts = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Post');
        return $posts;
    }

    public function getAllPosts()
    {
        $sql = "SELECT ID AS postId, Title AS title, Post_lead AS post_lead, Content AS content, Img AS img, Author AS author, DATE_FORMAT(Date_publish, '%d/%m/%Y à %Hh%imin%ss') AS date_fr, DATE_FORMAT(Date_modify, '%d/%m/%Y à %Hh%imin%ss') AS date_modify_fr FROM posts WHERE Post_statut_ID = 1 ORDER BY Date_modify DESC";
        $requete = $this->executerRequete ($sql);
        $posts = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Post');
        return $posts;
    }

    public function getPost($postId)
    {
        $sql = "SELECT ID AS postId, Title AS title, Post_lead AS post_lead, Content AS content, Img AS img, Author AS author, DATE_FORMAT(Date_publish, '%d/%m/%Y à %Hh%imin%ss') AS date_fr, DATE_FORMAT(Date_modify, '%d/%m/%Y à %Hh%imin%ss') AS date_modify_fr FROM posts WHERE ID = ".$postId." AND Post_statut_ID = 1";
        $requete = $this->executerRequete($sql);
      //  $post = $requete->fetch(\PDO::FETCH_CLASS, 'Post');
        $requete->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Post');
        $post = $requete->fetch();
        return $post;
    }

    public function getPostsPanel()
    {
        $sql = 'SELECT posts.ID AS postId, Title AS title, Author AS author, Post_statut AS post_statut, Post_statut_ID AS post_statut_ID, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM posts INNER JOIN posts_statut ON posts.Post_statut_ID = posts_statut.ID ORDER BY Date_modify DESC';
        $requete = $this->executerRequete($sql);
        $posts = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Post');
        return $posts;
    }

    public function addPostPanel()
    {
        $sql = 'INSERT INTO posts(Title, Post_lead, Content, Img, Date_publish, Post_statut_ID, Author) VALUES(?, ?, ?, ?, NOW(), 1, ?)';
        $requete = $this->executerRequete($sql, array($this->title, $this->post_lead, $this->content, $this->img, $this->author));
        return $requete;
    }

    public function editPostPanel()
    {
        $sql = 'UPDATE posts SET Title = ?, Post_lead = ?, Content = ?, Img = ?, Author = ?, Date_modify = NOW() WHERE ID = ?';
        $requete = $this->executerRequete($sql, array($this->title, $this->post_lead, $this->content, $this->img, $this->author, $this->postId));
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
