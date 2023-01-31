<?php

require_once'./Models/DBConnect.php';

require_once'./Models/classes/Comment.php';

class CommentManager {

    public static function getAllComments($id) {
        $dbh = dbconnect();
        //On retrouve la variable dbh grace à l'appel de la fonction qui la contient, sinon elle n'aurait pas la portée suffisante pour être appelée
        $query = ("SELECT * FROM comment JOIN user ON comment.id_user = user.id_user WHERE id_post =$id");
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

    public static function addComment($id_post, $id_user, $content) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');//ajouter la date car nécessaire à l'enregistrement du commentaire
        $query = "INSERT INTO comment (id_post, id_user, date, content) VALUES (:idPost, :idUser, '$date', :content)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':idPost', $id_post);
        $stmt->bindParam(':idUser', $id_user);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }

    public static function deleteCommentsByPostId($id){
        $dbh  = dbconnect();
        $query = "DELETE FROM comment WHERE comment.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}