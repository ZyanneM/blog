<?php

require_once'./Models/DBConnect.php';

require_once'./Models/classes/Post.php';

class PostManager {

    public static function getAllPosts() {
        $dbh = dbconnect();
        //On retrouve la variable dbh grace à l'appel de la fonction qui la contient, sinon elle n'aurait pas la portée suffisante pour être appelée
        $query = ("SELECT * FROM post");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
         //FETCH_CLASS appelle pour chaque objet retourné une nouvelle instance de la classe demandée
        $posts = $stmt->fetchAll
       (PDO::FETCH_CLASS, 'Post');
       return $posts;
    }

    public static function getPostById($id) {
         
            $dbh = dbconnect();
            $query = $dbh->prepare("SELECT * FROM post WHERE id_post =$id");
            
            $query->execute();
            //le fetch() classique ne comprend pas le Fetch_class d'emblée, il faut ajouter d'abord un setFetchMode
            $query->setFetchMode(PDO::FETCH_CLASS, 'Post');
            $post = $query->fetch();

            return $post;
        
    }

    // public static function getIdUserName($id) {

    //     $dbh = dbconnect();
    //         $query = $dbh->prepare("SELECT pseudo
    //         FROM users
    //         JOIN post ON users.id_user = post.id_user
    //         WHERE post.id_user = $id")or die(print_r($dbh->errorInfo()));
            
    //         $query->execute();

    //         //le fetch() classique ne comprend pas le Fetch_class d'emblée, il faut ajouter d'abord un setFetchMode
    //         // $query->setFetchMode(PDO::FETCH_CLASS, 'Post');
    //         $author_post = $query->fetch();

    //         return $author_post;
        
    // }

    // $query = ("SELECT * FROM post JOIN user ON post.id_user = user.id_user"
   
}