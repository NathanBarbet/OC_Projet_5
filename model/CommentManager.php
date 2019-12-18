<?php
require_once("model/Db.php");

class CommentManager extends Db
{
    public function getComments($postId)
    {
        $sql = 'SELECT ID, User_ID, Content, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM comments WHERE Post_ID = ? ORDER BY Date_publish DESC';
        $requete = $this->executerRequete($sql, array($postId));
        return $requete;
    }

    public function addComment()
    {
        $sql = 'INSERT INTO comments(Post_ID, User_ID, Content, Date_publish, Comment_statut_ID) VALUES(?, ?, ?, NOW(), 1)';
        $requete = $this->executerRequete($sql, array($this->postId, $this->author, $this->comment));
        return $requete;
    }
}
