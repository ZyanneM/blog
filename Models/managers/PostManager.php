<?php

require_once'./Models/DBConnect.php';

require_once'./Models/classes/Post.php';
require_once'./Models/classes/Post_category.php';

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
            $query = $dbh->prepare("SELECT * FROM post JOIN user ON post.id_user = user.id_user WHERE id_post =$id");
            
            $query->execute();
            //le fetch() classique ne comprend pas le Fetch_class d'emblée, il faut ajouter d'abord un setFetchMode
            $query->setFetchMode(PDO::FETCH_CLASS, 'Post');
            $post = $query->fetch();

            return $post;
        
    }

    public static function getPostByAuthor($id) {
        $dbh = dbconnect();
        //On retrouve la variable dbh grace à l'appel de la fonction qui la contient, sinon elle n'aurait pas la portée suffisante pour être appelée
        $query = ("SELECT * FROM post JOIN user ON post.id_user = user.id_user WHERE post.id_user = $id");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
         //FETCH_CLASS appelle pour chaque objet retourné une nouvelle instance de la classe demandée
        $posts = $stmt->fetchAll
       (PDO::FETCH_CLASS, 'Post');
       return $posts;
  
}

public static function addPost($title, $picture, $content, $id_user) {
        $dbh = dbconnect();

        $date = (new DateTime())->format('Y-m-d H:i:s');
        $query = "INSERT INTO post (title, date, content, picture, id_user) VALUES (:title, '$date', :content, :picture, :id_user)";
        $stmt = $dbh->prepare($query);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':id_user', $id_user);

        $stmt->execute();
        //methode de PDO qui permet de recuperer l'id du dernier élément qui a été inséré
        return $dbh->lastInsertId();
    }
    


public static function getPostsByCategoryId($id) {
    $dbh = dbconnect();
    $query = "SELECT * FROM post JOIN post_category ON post_category.id_post = post.id_post WHERE post_category.id_category = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
    return $posts;
}

public static function addPostCategories($id_post, $id_category) {
    $dbh = dbconnect();
    //Pas besoin de fetch dans une requête d'insertion car on insère les données on ne les lit pas
    $query="INSERT INTO post_category (id_post, id_category) VALUES (:post, :category)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':post', $id_post);
    $stmt->bindParam(':category', $id_category);
    $stmt->execute();

}

public static function deletePost($id_post) {
    $dbh = dbconnect();
    //Pas besoin de fetch dans une requête d'insertion car on insère les données on ne les lit pas
    $query="DELETE FROM post WHERE post.id_post =:id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':post', $id_post);
    $stmt->bindParam(':category', $id_category);
    $stmt->execute();

}

}