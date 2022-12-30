<?php

class Comment {

    private $id_comment;

    private $id_post;

    private $id_user;

    private $date;

    private $content;


    public function getIdComment(){
        return $this->id_comment;
    }

    public function getIdPost(){
        return $this->id_post;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }

    public function getIdUser(){
        return $this->id_user;
    }

    public function getCommentContent(){
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getPseudo(){
        return $this->pseudo;
    }

}