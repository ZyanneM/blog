<?php
session_start();
require_once'./Models/managers/CategoryManager.php';
require_once'./Models/managers/PostManager.php';

$categories = CategoryManager::getAllCategories();

//recoit l'id de la catégorie pour afficher les bonnes infos 
if(isset($_SESSION['user'])){
    if(isset($_POST)&&!empty($_POST)){
        $title = $_POST['title'];
        $uploads_dir ='./Content';
        $tmp_name = $_FILES['picture']['tmp_name'];
        $random_string = uniqid();
        $name = $random_string.'-'.($_FILES['picture']['name']);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $content = $_POST['content'];
        $id_user= $_SESSION['user']['id'];
        $newPostId = PostManager::addPost($title, $name, $content, $id_user);
        //ajout des catégories sélectionnées
        $postCategories = $_POST['categories'];
        //$_POST['categories'] nous donne un tableau des catégories sélectionnées il suffit donc de boucler sur ce tableau et pour chaque ligne insérer dans la table

        foreach($postCategories as $category){
            PostManager::addPostCategories($newPostId, $category);
        }

        // Upload de Fichier


    
    }

    require_once'./Views/addPostViews.php';

}else{
    echo "Vous ne passerez pas !";

}


//requiert le fichier de vue


?>
