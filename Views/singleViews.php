<?php

 require_once 'partials/header.php';

 ?>

 <!-- //utiliser les getters

$post -->

<section class="container section">
    
        <div class="article">
           <h2><?php echo $post->getTitle() ?></h2>
           <img class="image_article" src="<?php echo $post->getPicture() ?>" alt="image">
           <p><?php echo $post->getContent() ?></p> 
        </div>
</section>

<?php

 require_once 'partials/footer.php';

 ?>

    
</body>
</html>
