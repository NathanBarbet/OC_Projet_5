<?php
require_once("model/PostManager.php");

class Post extends PostManager
{
    protected $postId;
    protected $title;
    protected $post_lead;
    protected $content;
    protected $img;

    public function getPostId()
    {
        return htmlspecialchars($this->postId);
    }

    public function getTitle()
    {
        return htmlspecialchars($this->title);
    }

    public function getPost_lead()
    {
        return htmlspecialchars($this->post_lead);
    }

    public function getContent()
    {
        return htmlspecialchars($this->content);
    }

    public function getImg()
    {
        return htmlspecialchars($this->img);
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setPost_lead($post_lead)
    {
        $this->post_lead = $post_lead;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }
}
