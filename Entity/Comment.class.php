<?php

namespace Entity\Comment;

class Comment {
  private $content;
  private $user;
  private $id_product;

  /**
   * Get the value of content
   */ 
  public function getContent(){
    return $this->content;
  }
  /**
   * Set the value of content
   * @return  self
   */ 
  public function setContent($content){
    $this->content = $content;
    return $this;
  }

  /**
   * Get the value of user
   */ 
  public function getUser(){
    return $this->user;
  }
  /**
   * Set the value of user
   * @return  self
   */ 
  public function setUser($user){
    $this->user = $user;
    return $this;
  }
  /**
   * Get the value of id_product
   */ 
  public function getId_product(){
    return $this->id_product;
  }
  /**
   * Set the value of id_product
   * @return  self
   */ 
  public function setId_product($id_product){
    $this->id_product = $id_product;
    return $this;
  }
}