<?php

 require_once 'partials/header.php';
?>

<div class="form_container signin">

<h1 class="text-center mt-5">S'enregistrer</h1>

<form action="" method="POST" class="">
        <div class="">
            <label for="InputPseudo" class="form-label">Pseudo de l'utilisateur</label>
            <input type="text" class="form-control" id="InputPseudo" name="pseudo">
        </div>
        <div class="">
            <label for="InputEmail" class="form-label">Email de l'utilisateur</label>
            <input type="email" class="form-control" id="InputEmail" name="email">
        </div>
        <div class="">
            <label for="InputPassword" class="form-label">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="mdp">
        </div>
        <button class="" type="submit">S'enregistrer</button>
    </form>


</div>


     
<!-- // var_dump($posts); -->

<?php
 require_once 'partials/footer.php';

 ?>
