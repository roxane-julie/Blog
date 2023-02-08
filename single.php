<?php

require_once './session_start.php';
require_once 'model/managers/CommentManager.php';
require_once 'model/managers/CategoryManager.php';
require_once 'model/managers/PostManager.php';
require_once 'model/managers/userManager.php';

if (isset($_GET['id']) && !empty($_GET['id'])) 
{
    $id = $_GET['id'];

    $post = PostManager::getPostById($id);
    $test = $post->getId_user();
    $author = UserManager::getUserPseudo($test);
    $comments = CommentManager::getCommentsByPostId($id);
} 
if(isset($_POST)&&!empty($_POST))
{            $post_id = $_GET['id'];
            $user_id = $_SESSION['user']['id'];
            $commentaire = $_POST['content'];
            CommentManager::addComment($post_id, $user_id, $commentaire);
        
}
    

    require_once 'views/singleView.php';


