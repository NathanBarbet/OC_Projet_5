<?php
require_once("model/PostManager.php");

class Post extends PostManager
{
    protected $postId;

    public function getPostId()
    {
        return htmlspecialchars($this->postId);
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }
}
