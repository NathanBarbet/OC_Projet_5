<?php
require_once("model/Db.php");

class CommentManager extends Db
{
    public function getComments($postId)
    {
        $sql = "SELECT Name AS name, Firstname AS firstname, Content AS content, DATE_FORMAT(Date_publish, '%d/%m/%Y à %Hh%imin%ss') AS date_fr FROM comments INNER JOIN users ON comments.User_ID = users.ID WHERE Post_ID = ".$postId." ORDER BY Date_publish DESC";
        $requete = $this->executerRequete($sql);
        $comments = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Comment');
        return $comments;
    }

    public function addComment()
    {
        $sql = 'INSERT INTO comments(Post_ID, User_ID, Content, Date_publish, Comment_statut_ID) VALUES(?, ?, ?, NOW(), 1)';
        $requete = $this->executerRequete($sql, array($this->postId, $this->author, $this->content));
        return $requete;
    }
}
