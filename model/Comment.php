<?php
require_once("model/CommentManager.php");

class Comment extends CommentManager
{
    protected $postId;
    protected $posttitle;
    protected $commentId;
    protected $author;
    protected $name;
    protected $firstname;
    protected $content;
    protected $date_fr;
    protected $comment_statut;
    protected $comment_statut_ID;

    public function getPostId()
    {
        return htmlspecialchars($this->postId);
    }

    public function getCommentId()
    {
        return htmlspecialchars($this->commentId);
    }

    public function getPostTitle()
    {
        return htmlspecialchars($this->posttitle);
    }

    public function getName()
    {
        return htmlspecialchars($this->name);
    }

    public function getFirstname()
    {
        return htmlspecialchars($this->firstname);
    }

    public function getContent()
    {
        return ($this->content);
    }

    public function getDate()
    {
        return htmlspecialchars($this->date_fr);
    }

    public function getCommentStatut()
    {
        return htmlspecialchars($this->comment_statut);
    }

    public function getCommentStatutID()
    {
        return htmlspecialchars($this->comment_statut_ID);
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
