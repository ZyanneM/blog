<?php
session_start();
require_once'./Models/managers/PostManager.php';
require_once'./Models/managers/CategoryManager.php';

//Ici on mettra toute la logique du code

$posts = PostManager::getAllPosts();

$categories = CategoryManager::getAllCategories();

//requiert le fichier de vue
require_once'./Views/accountUserViews.php';

?>