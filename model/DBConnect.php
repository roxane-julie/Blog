<?php

// fonction permettant d'accesder à la base de donnée
function dbconnect()
{
    $dsn = 'mysql:host=localhost;dbname=blog'; // chemin d'acces à la BDD
    $user = "root"; // nom de l'utilisateur dans la BDD
    $pass = ""; // Mot de pass dans la BDD


// try =>essaie 
    try {
        $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $dbh; 
        // définition de la varibale $dbh + new PDO (création d'une nouvelle instance de l'objet PDO)
        /*array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') est un tableau d'options de configuration passées à l'objet PDO.
        PDO::ATTR_ERRMODE est utilisé pour configurer le mode d'erreur de PDO, PDO::ERRMODE_EXCEPTION permet de lever des exceptions en cas d'erreur pour faciliter le débogage.
        PDO::MYSQL_ATTR_INIT_COMMAND est utilisé pour définir la commande d'initialisation de la connexion à la base de données, SET NAMES utf8 permet d'utiliser l'encodage UTF-8 pour les données.*/
    } 
    // catch => sinon
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}


/* PDO =>  (PHP Data Objects) est une extension de PHP qui fournit une interface de programmation pour accéder à une base de données. Il permet de se connecter à différents types de bases de données (comme MySQL, SQLite, Oracle, etc.) en utilisant un seul et même modèle de programmation. Cela facilite la migration entre les différents types de bases de données.

L'objet PDO permet de créer une connexion à une base de données, de préparer et d'exécuter des requêtes SQL, de gérer les transactions, de récupérer les données retournées par les requêtes, etc. Il fournit également une couche d'abstraction pour protéger l'application contre les injections SQL en échappant automatiquement les données passées aux requêtes.

Il est recommandé d'utiliser PDO pour accéder à une base de données en PHP car il est plus sécurisé et plus portable que les autres méthodes d'accès à une base de données.*/