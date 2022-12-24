<?php

require_once'./Models/managers/PostManager.php';

//Ici on mettra toute la logique du code

$posts = PostManager::getAllPosts();

//requiert le fichier de vue
require_once'./Views/indexViews.php';

?>

