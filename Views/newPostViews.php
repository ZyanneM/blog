<?php

 require_once 'partials/header.php';
?>

<h1 class="page_title">Ajouter un Article</h1>

    <div class="form_container newpostcontainer">
        <form action="newPost.php" method="POST">
                <div class=>
                    <label for="InputTitle" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control" id="InputTitle" name="title">
                </div>
                <div class=>
                    <label for="InputContent" class="form-label">Contenu de l'article</label>
                    <input type="text" class="form-control" id="InputContent" name="content">
                </div>
                <div class=>
                    <label for="InputDate" class="form-label">Date d'ajout</label>
                    <input type="date" class="form-control" id="InputDate" name="date">
                </div>
                <div class=>
                    <label for="category" class="form-label">Catégorie</label>
                    <select class="form-control" id="category" name="category">
                        <option value="backend">BackEnd</option>
                        <option value="frontend">FrontEnd</option>
                        <option value="frontend">WebDesign</option>
                    </select>
                </div>
                <div class=>
                    <label for="InputPicture" class="form-label">Image</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <div class=>
                    <label for="InputUser" class="form-label">Auteur</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <button type="submit">Ajouter cet article</button>
        </form>
    </div>

<?php
 require_once 'partials/footer.php';

 ?>
