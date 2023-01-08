<?php

 require_once './Models/DBConnect.php';
 require_once 'partials/header.php';



 //utiliser les getters
//  function getAuthor() {
//             $dbh = dbconnect();
//             $query = $dbh->prepare("SELECT * FROM post JOIN user ON post.id_user = user.id_user");
            
//             $query->execute();
//             //le fetch() classique ne comprend pas le Fetch_class d'emblée, il faut ajouter d'abord un setFetchMode
//             $author_post = $query->fetch();

//             return $author_post;
//  }  
?>

<section class="container section single">
        <div>
        <i class="fa-solid fa-pen-to-square"></i>
        </div>
    
        <div class="article">
           <h2><?php echo $post->getTitle() ?></h2>
           <img class="image_article" src="./Content/<?php echo $post->getPicture() ?>" alt="image">
           <p> Writing by : <a class="span-author" href="author.php?id=<?php echo $post->getIdUser()?>"> <?php echo $post->getPseudo(); ?></a></p>
           <p><?php echo $post->getDate() ?></p>
           <p><?php echo $post->getContent() ?></p> 
        </div>
</section>

<section class="container section comment">
<p>Commentaires <br>
<?php foreach($comment as $comm) { ?>  
        <div class="comments">
          <a href="index.php"> <?php echo $comm->getPseudo(); ?> </a> <br>
           <?php echo $comm->getCommentContent();?>
</p> 
        </div>
        <?php } ?>
</section>

<?php

 require_once 'partials/footer.php';

 ?>

    
</body>
</html>
