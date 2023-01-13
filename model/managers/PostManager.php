<?php

require_once './model/DBConnect.php';
require_once './model/classes/Post.php';
class PostManager
{

    //fonction pour selectionner tout le post
    public static function getAllPosts()
    {

        $dbh = dbconnect();
        $query = ("SELECT * FROM post");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }
    public static function getPseudo()
    {
        $dbh = dbconnect();
        $query = "SELECT pseudo FROM post";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $posts = $stmt->fetch(PDO::FETCH_CLASS);
        return $posts;
    }


    // fonction pour SELECTIONNER UN POST PAR SON ID
    public static function getPostById($id)
    {
        $dbh = dbconnect();
        $query = ("SELECT *FROM post WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $post = $stmt->fetch();
        return $post;
    }
    //fonction pour selectionner un post OU L'ID DE LA CATEGORIE EST EGAL A L'ID D'UN POST 
    public static function getPostsByCategoryId($id)
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM post JOIN post_category ON post_category.id_post = post.id_post WHERE post_category.id_category = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }

    //fonction pour SELECTIONNER UN POST OU L'ID de l'utilisateur EST EGALE à l'ID D'UN POST
    public static function getPostsByUserId($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM post JOIN user ON user.id_user = post.id_user WHERE post.id_user = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }
    
    // fonction pour AJOUTER un article à la table POST( avec le titre, la date, une image, un contenu)
    public static function addPost($title, $picture, $content, $userId) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');
        $query = "INSERT INTO post (title, date, picture, content, id_user) VALUES (:title, '$date', :picture, :content, :id_user)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id_user', $userId);
        $stmt->execute();
        return $dbh->lastInsertId();
    }
// fonction pour AJOUTER a la table post une catégorie
    public static function addPostCategories($id_post, $id_category){
        $dbh = dbconnect();
        $query = "INSERT INTO post_category(id_post, id_category) VALUES(:post, :cat)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':post', $id_post);
        $stmt->bindParam(':cat', $id_category);
        $stmt->execute();
    }
// fonction pour modifier un article à la table post 
    public static function updatePost($title, $picture, $content, $userId) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');
        $query = " UPDATE post(title, date, picture, content, id_user) VALUES(:title, '$date', :picture, :content, :id_user)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id_user', $userId);
        $stmt->execute();
    }
// fonction pour supprimer un article de la table post 
    public static function deletePost($id) {
        $dbh = dbconnect();
        $query = "DELETE FROM post WHERE";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        
      
    }

}
