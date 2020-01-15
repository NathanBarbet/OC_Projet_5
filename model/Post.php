<?php
require_once("model/PostManager.php");

class Post extends PostManager
{
    protected $postId;
    protected $title;
    protected $post_lead;
    protected $content;
    protected $img;
    protected $date_fr;
    protected $date_modify_fr;
    protected $post_statut;
    protected $post_statut_ID;
    protected $author;

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
        return ($this->post_lead);
    }

    public function getContent()
    {
        return ($this->content);
    }

    public function getImg()
    {
        return htmlspecialchars($this->img);
    }

    public function getDate()
    {
        return htmlspecialchars($this->date_fr);
    }

    public function getDateModify()
    {
        return htmlspecialchars($this->date_modify_fr);
    }

    public function getPostStatut()
    {
        return htmlspecialchars($this->post_statut);
    }

    public function getPostStatutID()
    {
        return htmlspecialchars($this->post_statut_ID);
    }

    public function getAuthor()
    {
        return htmlspecialchars($this->author);
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

    public function setAuthor($author)
    {
        $this->author = $author;
    }
}
