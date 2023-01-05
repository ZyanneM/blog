<?php
require_once 'partials/header.php';


?>
                <div id="modal-container">
                    <div class="modal">
                        <div>💚 Connexion Réussie !</div>
                    </div>
                </div>

<div class="loginview">

    <h1 class="page-title">Connexion</h1>

        <form action="" method="POST" class="form_container login-form">
                <div class="">
                    <label for="InputMail" class="form-label">💌 Email Utilisateur</label><br>
                    <input type="email" class="form-control" id="InputMail" name="email">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">🔒 Mot de passe</label><br>
                    <input type="password" class="form-control" id="InputPassword" name="mdp">
                </div>
                <button class="btn-form" type="submit">Se Connecter</button>
            </form>

</div>

<?php 
require_once 'partials/footer.php';
?>