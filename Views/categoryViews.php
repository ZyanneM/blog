<?php 
require_once 'partials/header.php';
?>
<!-- <h1 class="category_name"><?php echo $categoryInfos->getCategoryName() ?></h1> -->

<div class="section_card_container">

<?php foreach($categoryPosts as $post) { ?>
    <div class="gradient_box">
        <section class="card_container">
            <div class="card">
                <div class="card_picture">
                <img src="./Content/<?php echo $post->getPicture() ?>" alt="image">
                    </div>
                        <div class="card_body">
                            <h5 class="card_title"><?php echo $post->getTitle() ?></h5>
                                <a href="single.php?id=<?php echo $post->getIdPost() ?>" class="btn_article">Voir l'article</a>
                            </div>
                        </div>
        </section>
            <!-- Permet de lisser les coins du path d'une image -->
<svg style="position: absolute;" width="0" height="0" version="1.1">
  <defs>
        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>
</svg>
    </div>  

<?php } ?>
</div>


<!-- <section class="container mt-5">
    <div class="row">
        <?php foreach($categoryPosts as $post) { ?>
            <div class="card col-12 col-md-4 col-lg-3">
                <img src="assets/img/<?php echo $post->getPicture() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->getTitle() ?></h5>
                    <a href="single.php?id=<?php echo $post->getIdPost() ?>" class="btn btn-primary">Voir l'article</a>
                </div>
            </div>
        <?php } ?> 
    </div>
</section> -->

<?php 
require_once 'partials/footer.php';
?>