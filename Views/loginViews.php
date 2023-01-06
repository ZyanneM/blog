<?php
require_once 'partials/header.php';

?>
               

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
                <div>Pas de compte ? <a href="signup.php" class="lien-inscription">Inscrivez-vous</a></div>
                <button class="btn-form" type="submit">Se Connecter</button>
            </form>

</div>





<?php 
    
    require_once 'partials/footer.php';
 
    if (isset($_SESSION['user'])) { 
   echo "<script>
  
        function openForm(){
        document.querySelector('.modal-container').style.display = 'block';
    
        document.querySelector('.modal-container').setAttribute('class', 'bounce-in-top');
  
  };
  
  openForm();
         
   </script>";

   } 
?>