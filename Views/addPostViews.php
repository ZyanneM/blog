<?php

require_once 'partials/header.php';
?>
<div class="formulaire">
    <h1 class="page-title">Ajouter un Article</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="form_container-addPost">
                <div class=>
                    <label for="InputTitle" class="form-label">Titre de l'article</label><br>
                    <input type="text" class="form-control" id="InputTitle" name="title">
                </div>
                <div class=>
                    <label for="InputContent" class="form-label">Contenu de l'article 📒</label><br>
                    <textarea class="textarea" id="InputContent" name="content" cols="70" wrap="hard" rows="5"></textarea>
                </div>
                <fieldset>
                        <legend>Choisissez une catégorie :</legend>
                <?php foreach($categories as $category){ ?>
                        <div>
                            <!-- //comment avoir une valeur unique pour chaque catégorie -->
                            <input class="input-category" type="checkbox" value="<?php echo $category->getIdCategory() ?>" id="category.<?php echo $category->getCategoryName() ?>" name="categories[]">
                            <!-- name="categories[]" on met les crochets pour que php comprenne que c'est un tableau et pouvoir réutiliser ce tableau pour associer l'id des categories à un post voir PostManager -->
                            <label for="category.<?php echo $category->getCategoryName() ?>">
                                <?php echo $category->getCategoryName() ?>
                            </label>
                        </div>
                <?php } ?>
                </fieldset>
                <div class="form-control-file">
                    <button for="InputPicture" class="btn-form-addPicture">🖼️ Ajouter une Image</button>
                    <input type="file" class="" id="picture" name="picture">
                </div>
                

                <button type="submit" class="btn-form-addPost">Ajouter cet article</button>
        </form>
</div>


<?php
 require_once 'partials/footer.php';

 ?>
