<?php

require_once'./Models/managers/PostManager.php';
require_once'./Models/managers/CommentManager.php';

//Ici on mettra toute la logique du code

$id = $_GET['id'];

$post = PostManager::getPostById($id);

$comment = CommentManager::getCommentById($id);


//requiert le fichier de vue
require_once'./Views/singleViews.php';

?>