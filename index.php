<?php
require_once 'model/managers/PostManager.php';
//ici on mettra toute la logique du code

if (isset($_GET['message']) && !empty($_GET['message'])){?>
<div class=" mb-0 alert alert-primary alert-dismissible fade show" role="alert">
<?= $_GET['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
$posts = PostManager::getAllPosts();
//requerir le fichier de vue 
require_once 'views/indexView.php';
