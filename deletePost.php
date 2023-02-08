<?php
require_once 'session_start.php';
require_once 'model/managers/PostManager.php';
require_once 'model/managers/CategoryManager.php';
require_once 'model/managers/userManager.php';

 if(isset($_GET['id'])&& !empty($_GET['id'])) {
    
    $id = $_GET['id'];
    $author = userManager::getAuthorByPostId($id);
    if ($author->getId_user() !=$_SESSION['user']['id']){
        header("location:index.php?status=danger&message=Vous n'avez pas l'autorisation de faire cette action");
        die;
    }

    PostManager::deletePostCategoriesByPostId($id);
    PostManager::deletePost($id);

 require_once 'views/deletePostView.php';
    
} else{
    echo 'Connectez-vous !';
}
