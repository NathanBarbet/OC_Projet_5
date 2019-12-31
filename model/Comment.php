<?php
require_once("model/CommentManager.php");

class Comment extends CommentManager
{
    protected $postId;
    protected $author;
    protected $name;
    protected $firstname;
    protected $content;
    protected $date_fr;

    public function getPostId()
    {
        return htmlspecialchars($this->postId);
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
