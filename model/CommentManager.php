<?php
require_once("model/DbManager.php");

class CommentManager extends DbManager
{
  
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT ID, User_ID, Content, DATE_FORMAT(Date_publish, \'%d/%m/%Y à %Hh%imin%ss\') AS Date_publish_fr FROM comments WHERE Post_ID = ? ORDER BY Date_publish DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(Post_ID, User_ID, Content, Date_publish, Comment_statut_ID) VALUES(?, ?, ?, NOW(), 1)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
}
