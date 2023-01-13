<?php


class User{

    private $id_user;

    private $pseudo;

    private $mail;

    private $password;




    public function getId_user()

    {
        return $this->id_user;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setMail($mail):self
    {
        $this->mail = $mail;

        return $this;
    }

    public function setPassword($password):self
    {
        $this->password = $password;

        return $this;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}