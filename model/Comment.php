<?php
require_once("model/CommentManager.php");

class Comment extends CommentManager
{
    protected $postId;
    protected $author;
    protected $comment;

    public function getPostId()
    {
        return htmlspecialchars($this->postId);
    }

    public function getAuthor()
    {
        return htmlspecialchars($this->author);
    }

    public function getComment()
    {
        return htmlspecialchars($this->comment);
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
