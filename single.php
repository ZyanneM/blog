<?php

require_once'./Models/managers/PostManager.php';
require_once'./Models/managers/CommentManager.php';
require_once'./Models/managers/CategoryManager.php';

//Ici on mettra toute la logique du code

$id = $_GET['id'];

$post = PostManager::getPostById($id);

$comment = CommentManager::getAllComments($id);
// $comment = CommentManager::getCommentById($id);

$categories = CategoryManager::getAllCategories();
//requiert le fichier de vue
require_once'./Views/singleViews.php';

?>