<?php
require_once("model/Db.php");

class CommentManager extends Db
{
    public function getComments($postId)
    {
        $sql = "SELECT Name AS name, Firstname AS firstname, Content AS content, DATE_FORMAT(Date_publish, '%d/%m/%Y à %Hh%imin%ss') AS date_fr FROM comments INNER JOIN users ON comments.User_ID = users.ID WHERE Post_ID = ".$postId." AND Comment_statut_ID = 1 ORDER BY Date_publish DESC";
        $requete = $this->executerRequete($sql);
        $comments = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Comment');
        return $comments;
    }

    public function addComment()
    {
        $sql = 'INSERT INTO comments(Post_ID, User_ID, Content, Date_publish, Comment_statut_ID) VALUES(?, ?, ?, NOW(), 2)';
        $requete = $this->executerRequete($sql, array($this->postId, $this->author, $this->content));
        return $requete;
    }

    public function getCommentsPanel()
    {
        $sql = "SELECT comments.ID AS commentId, posts.ID AS postId, posts.Title AS posttitle, Name AS name, Firstname AS firstname, comments.Content AS content, DATE_FORMAT(comments.Date_publish, '%d/%m/%Y à %Hh%imin%ss') AS date_fr, Comment_statut AS comment_statut, Comment_statut_ID AS comment_statut_ID FROM comments INNER JOIN users ON comments.User_ID = users.ID INNER JOIN comments_statut ON comments.Comment_statut_ID = comments_statut.ID INNER JOIN posts ON comments.Post_ID = posts.ID ORDER BY comments.Date_publish DESC";
        $requete = $this->executerRequete ($sql);
        $comments = $requete->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Comment');
        return $comments;
    }

    public function delCommentPanel($commentId)
    {
        $sql = 'DELETE FROM comments WHERE ID = ?';
        $requete = $this->executerRequete ($sql, array($commentId));
        return $requete;
    }

    public function publishComment($commentId)
    {
        $sql = 'UPDATE comments SET Comment_statut_ID = 1 WHERE ID = ?';
        $requete = $this->executerRequete($sql, array($commentId));
        return $requete;
    }

    public function pauseComment($commentId)
    {
        $sql = 'UPDATE comments SET Comment_statut_ID = 2 WHERE ID = ?';
        $requete = $this->executerRequete($sql, array($commentId));
        return $requete;
    }
}
