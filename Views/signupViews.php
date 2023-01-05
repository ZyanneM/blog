<?php

 require_once 'partials/header.php';
?>

<div class="signup-form">

<h1 class="page-title ">Inscription</h1>

<form action="" method="POST" class="form_container">
        <div class="">
            <label for="InputPseudo" class="form-label">🧙 Pseudo Utilisateur</label><br>
            <input type="text" class="form-control" id="InputPseudo" name="pseudo">
        </div>
        <div class="">
            <label for="InputEmail" class="form-label">💌 Adresse Email</label><br>
            <input type="email" class="form-control" id="InputEmail" name="email">
        </div>
        <div class="">
            <label for="InputPassword" class="form-label">🔒 Mot de passe</label><br>
            <input type="password" class="form-control" id="InputPassword" name="mdp">
        </div>
        <button class="btn-form" type="submit">S'enregistrer</button>
    </form>


</div>


     
<!-- // var_dump($posts); -->

<?php
 require_once 'partials/footer.php';

 ?>
