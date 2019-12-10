<?php
require_once("model/Db.php");

class Comment extends Db
{

    public function getComments($postId)
    {
        $sql = 'SELECT ID, User_ID, Content, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM comments WHERE Post_ID = ? ORDER BY Date_publish DESC';
        $comments = $this->executerRequete($sql, array($postId));
        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $sql = 'INSERT INTO comments(Post_ID, User_ID, Content, Date_publish, Comment_statut_ID) VALUES(?, ?, ?, NOW(), 1)';
        $affectedLines = $this->executerRequete($sql, array($postId, $author, $comment));
        return $affectedLines;
    }
}
