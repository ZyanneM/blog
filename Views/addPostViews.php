<?php

require_once 'partials/header.php';
?>
<div class="formulaire">
    <h1 class="page_title">Ajouter un Article</h1>
        <form action="" method="POST" enctype="multipart/form-data">
                <div class=>
                    <label for="InputTitle" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control" id="InputTitle" name="title">
                </div>
                <div class=>
                    <label for="InputContent" class="form-label">Contenu de l'article</label>
                    <textarea class="form-control" id="InputContent" name="content"></textarea>
                </div>
                <fieldset>
                        <legend>Choisissez une catégorie :</legend>
                <?php foreach($categories as $category){ ?>
                        <div>
                            <!-- //comment avoir une valeur unique pour chaque catégorie -->
                            <input type="checkbox" value="<?php echo $category->getIdCategory() ?>" id="category.<?php echo $category->getCategoryName() ?>" name="categories[]">
                            <!-- name="categories[]" on met les crochets pour que php comprenne que c'est un tableau et pouvoir réutiliser ce tableau pour associer l'id des categories à un post voir PostManager -->
                            <label for="category.<?php echo $category->getCategoryName() ?>">
                                <?php echo $category->getCategoryName() ?>
                            </label>
                        </div>
                <?php } ?>
                </fieldset>
                <div class=>
                    <label for="InputPicture" class="form-label">Image</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                

                <button type="submit">Ajouter cet article</button>
        </form>
</div>


<?php
 require_once 'partials/footer.php';

 ?>
