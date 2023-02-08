<?php
require_once 'partials/header.php';

?>
<!-- AFFICHAGE DU TITRE !-->

<h2 style="font-family:Fredericka the Great, cursive"><?php  echo $post->getTitle() ?></h2>

<!-- AFFICHAGE PSEUDO !-->

<p style="text-align:center; margin-top: 2%;"> Un Article crée par <?= $author->getPseudo()?> </p>

<div class="container" style="text-align: justify">
  <div class="row">

<!-- AFFICHAGE DE L'IMAGE !-->


  <div class="col-12 col-md-4 text-center pe-2">
    <img id="single_picture" src="./asset/img/<?php echo $post->getPicture()?>" alt=""class=" image_reduite mb-5 w-100 img-thumbnail">
    </div>

<!-- CONTENU DE L'ARTICLE !-->

    <div class="col-12 col-md-8">
    <p class="ms-4"> <?php echo $post->getContent() ?></p>
    </div> 


<!-- AFFICHAGE DES COMMENTAIRES DEJA POSTES-->


      <div id="comments">
          <?php foreach($comments as $comment) { 
            $commentAuthor = UserManager::getCommentAuthorByCommentId($comment->getIdComment());?>
            <div class="mb-3">
              <h3><?php echo $commentAuthor->getPseudo() ?></h3>
              <span><?php echo $comment->getDate() ?></span>
              <p><?php echo $comment->getContent() ?></p>
            </div>
            <?php } ?>
      </div>


<!--  CREATION DE COMMENTAIRE SEULEMENT SI L'USER EST CONNECTE !-->      



<!-- INPUT COMMENTAIRE !-->
<?php if (isset($_SESSION['user'])) { ?>
        <div id="addcomment">
          <form action="" method="post">
            <div class="mb-3">
              <label for="InputContent" class="form-label">Commentaires </label>
              <textarea class="form-control" id="InputComment" name="comment"></textarea>
              <input id="pseudo" type="hidden" value="<?php echo $_SESSION['user']['pseudo'] ?>">

            </div>
          
          </div>
         
<!-- BOUTON SOUMETTRE !-->

            <div class="ret_del">
              <button id="btn1" class="mt-5 mx-5" type="submit">
                <span id="spn1"class="label">Soumettre</span>
                  <span id="spn2"class="icon">
                    <svg id="svg1"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path id="pth1"fill="none" d="M0 0h24v24H0z"></path><path id="pth2"fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                  </span>
              </button>
            </div>
          </form>
          </div>
        <?php
            } 
          require_once 'partials/footer.php';
        ?>
