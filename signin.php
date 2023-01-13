<?php

require_once 'model/managers/UserManager.php';
//reception des données du formulaire
if(isset($_POST)&&!empty($_POST)){
    //sanitisation des données et chiffrement du mot de passe
    $pseudo = htmlentities($_POST['pseudo']);
    $mail = htmlentities($_POST['email']);
    $mdp = $_POST['mdp'];
    $hashed_pwd = password_hash($mdp, PASSWORD_BCRYPT);
    userManager::addUser($pseudo, $mail, $hashed_pwd);
    
    header('location: index.php?status="succes"&message="Vous êtes bien inscrit !"')
    ;    //transmission à une méthode du manager pour enregistrer en bdd 
    //UserManager::addUser(); à construire
    //UserManager::connectUser(); à construire
}

require_once 'views/signinView.php';  
  