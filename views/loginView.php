<?php
require_once 'partials/header.php';
?>

<h1 class="text-center mt-5">Se connecter</h1>

<form action="" method="POST" class="col-md-6 offset-md-3 mt-5">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email de l'utilisateur</label>
            <input type="email" class="form-control" id="InputEmail" name="email">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="mdp">
        </div>
        <button class="btn btn-primary" type="submit">S'enregistrer</button>
    </form>

<?php 
require_once 'partials/footer.php';
?>