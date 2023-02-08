
<?php 
require_once 'partials/header.php';
?>
<h3 class="text-center mt-5"> Vous souhaitez partager un article avec nous ?</h3>

<div class="container">
    <form action="" method="post"enctype="multipart/form-data">
        <div class="mb-3">
            <label for="InputTitle" class="form-label">Titre</label>
            <input type="text" class="form-control" id="InputTitle" name="title">
        </div>
        <div class="mb-3">
            <label for="InputPicture" class="form-label">Image</label>
            <input type="file" class="form-control" id="InputPicture" name="picture">
        </div>
        <div class="mb-3">
            <label for="InputContent" class="form-label">Contenu</label>
            <textarea class="form-control" id="InputContent" name="content"></textarea>
        </div>
        <?php foreach($categories as $category){ ?>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?php echo $category->getIdCategory() ?>" name="categories[]" id="<?php echo $category->getCategoryName() ?>">
            <label class="form-check-label" for="<?php echo $category->getCategoryName() ?>">
                <?php echo $category->getCategoryName(); ?>
            </label>
            </div>
        <?php }
        
        ?>

    <div class="ret_del">
        
            <button id="btn1" class="mt-5 mx-5" type="submit">
                <span id="spn1"class="label">Ajouter</span>
                <span id="spn2"class="icon">
                    <svg id="svg1"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path id="pth1"fill="none" d="M0 0h24v24H0z"></path><path id="pth2"fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                </span>
            </button>

            
        <a href="./index.php">
            <button id="btn1" class="mt-5 mx-5" type="button">
                <span id="spn1"class="label">Retour</span>
                <span id="spn2"class="icon">
                    <svg id="svg1"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path id="pth1"fill="none" d="M0 0h24v24H0z"></path><path id="pth2"fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                </span>
            </button></a>
        </div>
    </form>
</div>

<?php
require_once 'partials/footer.php';
?>