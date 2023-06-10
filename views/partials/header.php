<?php 
require_once 'session_start.php';


?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"></head>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php
                    if (!isset($_SESSION['user']) && empty($_SESSION['user'])){ ?>
                    
                        <li class="nav-item">
                        <a class="nav-link" href="signin.php">S'inscrire</a>
                        
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                        
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"href="./index.php">Accueil</a>
                    </li>
                    <?php
                    }
                    ?>
                   
                    <?php 
                    if (isset($_SESSION['user'])&& !empty($_SESSION['user'])) { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Se déconnecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addPost.php">Ajouter un article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Accueil</a>
                    </li>
                    <?php
                    }
                    ?>
                    
                </ul>


            </div>
        </div>
    </nav>
    
