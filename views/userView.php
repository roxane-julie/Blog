<?php

require_once 'partials/header.php';

?>
<form action="" method="post">

    <div class="pseudo">
        <label for="pseudo">Votre pseudo</label>
        <input type="text"id="pseudo" name="pseudo" required>pseudo</input>
    </div>

    <div class="mail">
        <label for="mail">Votre mail</label>
        <input type="text"id="mail" name="mail"required>pseudo</input>
    </div>

    <div class="password">
        <label for="password">Votre mot de pass</label>
        <input type="password"id="password" name="password"required>pseudo</input>
    </div>

    <button type="submit">Valider</button>

</form>




<?php

require_once 'partials/footer.php';

?>