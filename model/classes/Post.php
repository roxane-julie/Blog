<?php
  // création de la class Post, servant à stocké les infos relatives au Post (id, titre, date, contenu, picture, id de l'utilisateur) t leurs fonctions
class Post
{
  

    // => Les propriétés étant en privant on ne peut donc pas les modifier directement.
    private $id_post;

    private $title;

    private $date;        

    private $content;

    private $picture;

    private $id_user;

// => Les fonctions suivantes vont donc nous permettrent d'acceder et de modifier les propriétés du dessus


    public function getId_post() // renvoie la valeur de la propriété id_post
    {
        return $this->id_post;
    }

    public function getTitle() // renvoie la valeur de la propriété title
    {
        return $this->title;
    }

    public function setTitle($title):self // permet de définir la valeur de la propriété title
    {
        $this->title = $title;
        return $this;
    }

    public function getDate() // renvoie la valur de date
    {
        return $this->date;
    }

    public function setDate($date):self // permet de modifier la valeur de date
    {
        $this->date = $date;
        return $this;
    }

    public function getContent() // renvoie la valeur du contenu (content)
    {
        return $this->content;
    }

    public function setContent($content):self // permet de modifier la valeur du contenu 
    {
        $this->content = $content;
        return $this;
    }

    public function getPicture() // renvoie la valeur de picture
    {
        return $this->picture;
    }

    public function setPicture($picture):self // permet de modifier la valeur de picture
    {
        $this->picture = $picture;
        return $this;
    }

    public function getId_user() // renvoie la valeur de id_user
    {
        return $this->id_user;
    }

    public function setId_user($id_user):self // permet de modifier la valeur de id_user
    {
        $this->id_user = $id_user;
        return $this;
   }
}