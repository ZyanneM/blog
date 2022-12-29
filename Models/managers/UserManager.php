<?php

require_once'./Models/DBConnect.php';

require_once'./Models/classes/User.php';

class UserManager {

    public static function getAllUsers() {
        $dbh = dbconnect();
        //On retrouve la variable dbh grace à l'appel de la fonction qui la contient, sinon elle n'aurait pas la portée suffisante pour être appelée
        $query = ("SELECT * FROM users");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
         //FETCH_CLASS appelle pour chaque objet retourné une nouvelle instance de la classe demandée
        $users = $stmt->fetchAll
       (PDO::FETCH_CLASS, 'User');
       return $users;
    }

    public static function getUserById() {
         
            $dbh = dbconnect();
            $query = $dbh->prepare("SELECT pseudo FROM user JOIN post ON user.id_user = post.id_user");
            
            $query->execute();
            //le fetch() classique ne comprend pas le Fetch_class d'emblée, il faut ajouter d'abord un setFetchMode
            $query->setFetchMode(PDO::FETCH_CLASS, 'User');
            $user = $query->fetch();

            return $user;
        
    }

}