<?php
require_once 'partials/header.php';
require_once 'session_start.php';
?>

<h1 class="text-center mt-5" style="font-family:Fredericka the Great, cursive">Cosy Corner</h1>
<section class="container mt-5">
    <div class="row d-flex justify-content-center">
        <?php foreach ($posts as $post) { ?>

            <div class="card col-12 col-md-4 col-lg-2 m-4 image_reduite ">
                <!-- <img src="./asset/img_chambre1.jpg" class="card-img-top" alt=""> -->
                <img src="asset/img/<?= $post->getPicture()?>" alt=""class="card-img-top rounded d-block mx-auto mt-3 w-100 h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $post->getTitle() ?>
                    </h5>
                    <a href="single.php?id=<?php echo $post->getId_post() ?>" class=" btn btn-outline-secondary"> Voir plus !</a>
                
                </div>
            </div>

            <?php } ?>
    </div>
</section>



<?php

require_once 'partials/footer.php';

?>
