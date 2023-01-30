<?php
// Création de la class User, class qui va nous permettre de stocker les informations relatives à user ainsi que leurs fonctions

class User{

    // les propriétés suivantes sont déclarés en privé ce qui signifie qu'on ne peut pas les modifier directement à l'extérieur de la classe, elles servent à stocké des informations
    private $id_user; // sert à stocké un identifiant unique pour chaque utilisateur

    private $pseudo; // sert à stocker des infos sur le pseudo
     
    private $mail;  // sert à stocker des infos sur le mail

    private $password; //  // sert à stocker des infos sur le password




    public function getId_user() // renvoie la valeur de la propriéte id_user

    {
        return $this->id_user;
    }

    public function getPseudo()// renvoie la valeur de la propriéte pseudo
    {
        return $this->pseudo;
    }

    public function getMail()// renvoie la valeur de la propriéte mail
    {
        return $this->mail;
    }

    public function getPassword()// renvoie la valeur de la propriéte password
    {
        return $this->password;
    }

    public function setMail($mail):self // permet de définir la valeur de la propriété mail
    {
        $this->mail = $mail;

        return $this;
    }

    public function setPassword($password):self  // permet de définir la valeur de la propriété password
    {
        $this->password = $password;

        return $this;
    }

    public function setPseudo($pseudo)  // permet de définir la valeur de la propriété pseudo
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}