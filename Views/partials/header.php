<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Baloo+2:wght@400;500;600&family=Viga&display=swap" rel="stylesheet">
    <!-- CSS only -->
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link href="./Content/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="./Content/favicon.ico" />
    <script src="https://kit.fontawesome.com/a0c62e75b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>La Toile</title>
</head>
<body>

    <header>    
        <!-- <div class="login">
        <a href=""><i class="fa-solid fa-circle-user" id="icone-login"></i></a>
        <a>Se Connecter</a>
        </div> -->
        <h1>La Toile <img class="logo" src="./Content/logo.png" alt="logo"></h1>
            
            <h2>Le blog pour les développeurs créatifs</h2>

            <div class="container_image_banniere">
            <img class="image_banniere" src="./Content/portrait_fond_blog.png" alt="portrait">
        </div>

                <div class="border-bottom"></div>


        
                <div class="hamburger-menu">

<input id="menu__toggle" type="checkbox" />
<label class="menu__btn" for="menu__toggle">
  <span></span>
</label>

<ul class="menu__box">
    <li><a class="item" href="login.php">
    <i class="fa-solid fa-right-to-bracket"></i>Se Connecter</a></li>
    <li><a class="item" href="signup.php">
    <i class="fa-solid fa-user-pen"></i>S'inscrire</a></li>
    <li><a class="item" href="addPost.php">
    <i class="fa-solid fa-file-pen"></i></i>Ajouter un Post</a></li>
    <li><a class="item" href="#">
        <i id="contact_icon"class="fa-solid fa-envelope"></i>Contact</a></li>
        <li><a class="item" href="logout.php">
        <i class="fa-solid fa-house-circle-xmark"></i>Se déconnecter</a></li>
</ul>
</div>

        <nav>
            <ul>
                 <li><a href="index.php">Accueil</a></li>
                    <?php foreach($categories as $category){ ?>
                <li><a class="tab" href="category.php?id=<?php echo $category->getIdCategory() ?>"><?php echo $category->getCategoryName() ?></a></li>
                    <?php } ?>
                
            </ul>
        </nav>
    </header>

    