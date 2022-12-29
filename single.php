<?php

require_once'./Models/managers/PostManager.php';
require_once'./Models/managers/UserManager.php';

//Ici on mettra toute la logique du code

$id = $_GET['id'];

$post = PostManager::getPostById($id);


//requiert le fichier de vue
require_once'./Views/singleViews.php';

?>