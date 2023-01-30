<?php

require_once './model/DBConnect.php'; // Fais appel au fichier DBConnect.php 
require_once './model/classes/Category.php'; //         //     Category.php

class CategoryManager // Création de la class Category manager qui va regrouper l'ensemble des fonctions concernant la category
{

    // /!\ TOUTES LES FONCTION SONT CONSTRUITES PAREILS
    public static function getAllCategories() // fonction de selection de toutes les colonnes de la table category dans la base de donnée
    {
        $dbh = dbconnect(); // connection à la BDD
        $query = "SELECT * FROM category"; // requete query
        $stmt = $dbh->prepare($query); // préparation de la requête
        $stmt->execute(); // éxecution de la requête
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category'); //récupération des résultat de la requête
        return $categories; // renvoie par la fonction
    }

    public static function getCategoryInfos($id) // fonction de selection d'une catégory en fonction de l'id passé en paramétre si l'id_category correspond
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM category WHERE id_category = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Category');
        $category = $stmt->fetch();

        return $category;
    }


    public static function getCategoriesByPostId($id) // fonction de selection d'une catégory en fonction de l'id passé en paramétre si l'id_category correspond à celui du post
    {
        $dbh = dbconnect();
        $query = "SELECT category.id_category, category_name FROM category  JOIN post_category ON category.id_category = post_category.id_category JOIN t_post ON t_post_category.id_post = t_post.id_post WHERE t_post.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

    public static function getPostsByCategoryId($id) // fonction de selection des post en fonction de leurs id si celui ci correspond à l'id category passé en parametre
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM post JOIN post_category ON post_category.id_post = post.id_post WHERE post_category.id_category = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }
}