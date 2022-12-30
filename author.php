<?php

require_once'./Models/managers/PostManager.php';

//Ici on mettra toute la logique du code

$id = $_GET['id'];

$posts = PostManager::getPostByAuthor($id);

//requiert le fichier de vue
require_once'./Views/authorViews.php';

?>