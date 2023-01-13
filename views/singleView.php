<?php

require_once 'partials/header.php';
?>
<h2><?php  echo $post->getTitle() ?></h2>

<p> Un Article crée par <?= $post->getId_user()?></p>

<p> <?php echo $post->getContent() ?></p>

<img src="asset/<?= $post->getPicture()?>" alt=""class="img-thumbnail">

<!-- <button type="button" class="btn btn-secondary" disabled><a href="./indexView.php">Menu principal</a></button> -->
<a href="./index.php" class="btn btn-primary">Retour aux articles</a>
<?php

require_once 'partials/footer.php';
?>