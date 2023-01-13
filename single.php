<?php


require_once 'model/managers/PostManager.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $post = PostManager::getPostById($id);
    require_once 'views/singleView.php';

}
