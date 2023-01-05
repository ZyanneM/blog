<?php

require_once './Models/managers/UserManager.php';
require_once './Models/managers/CategoryManager.php';

//reception des données du formulaire
if(isset($_POST)&&!empty($_POST)){
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    //récupération des données de l'utilisateur via une valeur unique telle que le mail
    $user = UserManager::getUserByEmail($email);
    //vérification de la correspondance du mdp en bdd avec celui saisi par l'utilisateur
    $verified_user= password_verify($mdp, $user->getPassword());
    if($verified_user){
        UserManager::connectUser($user);
    }
    // var_dump($verified_password);
    //UserManager::connectUser(); à construire
}

$categories = CategoryManager::getAllCategories();

require_once './Views/loginViews.php';

if(isset($_POST)&&!empty($_POST)){
    header('location:index.php');
}

