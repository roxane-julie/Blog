<?php

require_once './model/DBConnect.php';
require_once './model/classes/Category.php';

class CategoryManager
{

    public static function getAllCategories()
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM category";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

    public static function getCategoryInfos($id)
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM category";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }


    public static function getCategoriesByPostId($id)
    {
        $dbh = dbconnect();
        $query = "SELECT category.id_category, category_name FROM category  JOIN post_category ON category.id_category = post_category.id_category JOIN t_post ON t_post_category.id_post = t_post.id_post WHERE t_post.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

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
}