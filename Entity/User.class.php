<?php

namespace Entity\User;

class User {
  private $name;
  private $first_name;
  private $pseudo;
  private $mail;
  private $adresse;
  private $postal;

  /**
   * Get the value of name
   */ 
  public function getName(){
    return $this->name;
  }
  /**
   * Set the value of name
   * @return  self
   */ 
  public function setName($name){
    $this->name = $name;
    return $this;
  }
  /**
   * Get the value of first_name
   */ 
  public function getFirst_name(){
    return $this->first_name;
  }
  /**
   * Set the value of first_name
   * @return  self
   */ 
  public function setFirst_name($first_name){
    $this->first_name = $first_name;
    return $this;
  }
  /**
   * Get the value of pseudo
   */ 
  public function getPseudo(){
    return $this->pseudo;
  }
  /**
   * Set the value of pseudo
   * @return  self
   */ 
  public function setPseudo($pseudo){
    $this->pseudo = $pseudo;
    return $this;
  }
  /**
   * Get the value of mail
   */ 
  public function getMail(){
    return $this->mail;
  }
  /**
   * Set the value of mail
   * @return  self
   */ 
  public function setMail($mail){
    $this->mail = $mail;
    return $this;
  }
  /**
   * Get the value of adresse
   */ 
  public function getAdresse(){
    return $this->adresse;
  }
  /**
   * Set the value of adresse
   * @return  self
   */ 
  public function setAdresse($adresse){
    $this->adresse = $adresse;
    return $this;
  }
  /**
   * Get the value of postal
   */ 
  public function getPostal(){
    return $this->postal;
  }
  /**
   * Set the value of postal
   * @return  self
   */ 
  public function setPostal($postal){
    $this->postal = $postal;
    return $this;
  }
}