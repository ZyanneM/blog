<?php

require_once'./Models/DBConnect.php';

require_once'./Models/classes/Comment.php';

class CommentManager {

    public static function getAllComments() {
        $dbh = dbconnect();
        //On retrouve la variable dbh grace à l'appel de la fonction qui la contient, sinon elle n'aurait pas la portée suffisante pour être appelée
        $query = ("SELECT * FROM comment");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
         //FETCH_CLASS appelle pour chaque objet retourné une nouvelle instance de la classe demandée
        $comments = $stmt->fetchAll
       (PDO::FETCH_CLASS, 'Comment');
       return $comments;
    }

    public static function getCommentById($id) {
         
        $dbh = dbconnect();
        $query = $dbh->prepare("SELECT content FROM comment WHERE id_post =$id");
        
        $query->execute();
        //le fetch() classique ne comprend pas le Fetch_class d'emblée, il faut ajouter d'abord un setFetchMode
        $query->setFetchMode(PDO::FETCH_CLASS, 'Comment');
        $comment = $query->fetch();

        return $comment;
        
    }

}