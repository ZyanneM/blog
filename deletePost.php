<?php
session_start();
require_once './Models/managers/PostManager.php';
require_once './Models/managers/CommentManager.php';
require_once './Models/managers/UserManager.php';

//on check si on reçoit bien un id de post a supprimer
if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $author = UserManager::getAuthorByPostId($id);
    //on vérifie que l'utilisateur en cours est bien l'auteur de l'article
    // if($author->getIdUser() != $_SESSION['user']['id']){
    //     header("location:index.php?status=danger&message=Vous n'avez pas l'autorisation de faire cette action");
    //     die; //si ce n'est pas le cas on quitte le script immédiatement après avoir redirigé le coquin 
    // }

    if(isset($_SESSION['user']))
                        $id = $_SESSION['user']['role'];
                        if ($id != 1){
                            header("location:index.php?status=danger&message=Vous n'avez pas l'autorisation de faire cette action");
                            die;
                        }
    //pour la suppression, il faut retirer les liaisons de l'article avant celui ci
    //commençons par les catégories
    PostManager::deletePostCategoriesByPostId($id);
    //on continue avec les commentaires
    CommentManager::deleteCommentsByPostId($id);
    //on peut enfin effacer le post 
    PostManager::deletePost($id);
    header("location:index.php?status=success&message=L'article a bien été supprimé");
}