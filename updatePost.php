<?php
session_start();
require_once './Models/managers/PostManager.php';
require_once './Models/managers/UserManager.php';
require_once './Models/managers/CategoryManager.php';
require_once './Models/managers/CommentManager.php';

$categories = CategoryManager::getAllCategories();

    $id = $_GET['id'];
  
    //récupérer les données du post pour les envoyer dans la vue
    $post = PostManager::getPostById($id);
    $post_categories = CategoryManager::getCategoriesByPostId($id);

//si on a des données en POST 
// if(isset($_POST)&&!empty($_POST)){
//     $title = $_POST['title'];
// }else{
// echo ('Je ne trouve pas les données');
// }


require_once 'views/updatePostViews.php';