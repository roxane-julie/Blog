<?php

class Post
{
    private $id_post;

    private $title;

    private $date;

    private $content;

    private $picture;

    private $id_user;




    public function getId_post()
    {
        return $this->id_post;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title):self
    {
        $this->title = $title;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date):self
    {
        $this->date = $date;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content):self
    {
        $this->content = $content;
        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture):self
    {
        $this->picture = $picture;
        return $this;
    }

    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($id_user):self
    {
        $this->id_user = $id_user;
        return $this;
   }
}