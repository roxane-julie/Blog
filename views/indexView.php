<?php
require_once 'partials/header.php';
?>
<h1 class="text-center mt-5">Sweeting Home's</h1>
<section class="container mt-5">
    <div class="row">
        <?php foreach ($posts as $post) { ?>

            <div class="card col-12 col-md-4 col-lg-2 m-4 ">
                <!-- <img src="./asset/img_chambre1.jpg" class="card-img-top" alt=""> -->
                <img src="asset/img/<?= $post->getPicture()?>" alt=""class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $post->getTitle() ?>
                    </h5>
                    <a href="single.php?id=<?php echo $post->getId_post() ?>" class="btn btn-primary"> Voir plus !</a>
                </div>
            </div>

            <?php } ?>
    </div>
</section>




<?php

require_once 'partials/footer.php';

?>
