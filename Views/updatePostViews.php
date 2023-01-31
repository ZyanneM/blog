<?php
require_once './Models/DBConnect.php';
require_once 'partials/header.php';
?>
    <div class="form_container">
        <form action="updatePost.php" method="POST">
                <div class=>
                    <label for="InputTitle" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control" id="InputTitle" name="title" value="<?php echo $post->getTitle() ?>">
                </div>
                <div class=>
                    <label for="InputContent" class="form-label">Contenu de l'article</label>
                    <input type="text" class="form-control" id="InputContent" name="content" value="<?php echo $post->getContent() ?>">
                </div>
                <?php foreach($categories as $category){ ?>
        <div class="form-check">
            <?php if(in_array($category->getIdCategory(), $post_categories)) { ?>
                <input checked class="form-check-input" type="checkbox" value="<?php echo $category->getIdCategory() ?>" name="categories[]" id="<?php echo $category->getCategoryName() ?>">
                <label class="form-check-label" for="<?php echo $category->getCategoryName() ?>">
                    <?php echo $category->getCategoryName(); ?>
                </label>
            <?php } else { ?>
                <input class="form-check-input" type="checkbox" value="<?php echo $category->getIdCategory() ?>" name="categories[]" id="<?php echo $category->getCategoryName() ?>">
                <label class="form-check-label" for="<?php echo $category->getCategoryName() ?>">
                    <?php echo $category->getCategoryName(); ?>
                </label>
            <?php } ?>
        </div>
        <?php } ?>
                <div class=>
                    <label for="InputPicture" class="form-label">Image</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <button type="submit">Modifier cet article</button>
        </form>
    </div>
<?php
 require_once 'partials/footer.php';

 ?>
