<?php

class Product {
    // Only for the product
    private $img;             // Image of the product
    private $reference;       // Reference of this product
    private $price;           // Price of the product
    private $quantity;        // Quantity of the product
    private $category;        // Id for category
    private $sub_category;    // Id for sub-category
    private $description;     // Specific attributes of this product (size, consumption or other specification of the user)
    private $promotion;       // NULL or id of promotion
    // Metadata related to this product
    private $id_user;         // Id user who creat this product
    private $create_date;     // When the product is create
    private $update_date;     // When the product is update/modify
    private $delete_date;     // Put a date in this property to specific
    private $who;             // Register who execute a "CRUD" on this product itself
    /**
     *  Construct for product
     */
    public function __construct(string $img, string $price, string $quantity, string $id) {
        $this->img         = $img;
        $this->price       = $price;
        $this->quantity    = $quantity;
        $this->id_user     = $id;
    }
    /**
     * Get the value of img
     * @return string Path to image in repository
     */ 
    public function getImg(){
        return $this->img;
    }
    /**
     * Set the value of img
     * @return  self
     */ 
    public function setImg($img){
        $this->img = $img;
        return $this;
    }
    /**
     * Get the value of price
     * @return string
     */ 
    public function getPrice(){
        return $this->price;
    }
    /**
     * Set the value of price
     * @return  self
     */ 
    public function setPrice($price){
        $this->price = $price;
        return $this;
    }
    /**
     * Get the value of quantity
     */ 
    public function getQuantity(){
        return $this->quantity;
    }
    /**
     * Set the value of quantity
     * @return  self
     */ 
    public function setQuantity($quantity){
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get the value of category
     */ 
    public function getCategory(){
        return $this->category;
    }
    /**
     * Set the value of category
     * @return  self
     */ 
    public function setCategory($category){
        $this->category = $category;
        return $this;
    }
    /**
     * Get the value of sub_category
     */ 
    public function getSub_category(){
        return $this->sub_category;
    }
    /**
     * Set the value of sub_category
     * @return  self
     */ 
    public function setSub_category($sub_category){
        $this->sub_category = $sub_category;
        return $this;
    }
    /**
     * Get the value of create_date
     */ 
    public function getCreate_date(){
        return $this->create_date;
    }
    /**
     * Set the value of create_date
     * @return  self
     */ 
    public function setCreate_date($create_date){
        $this->create_date = $create_date;
        return $this;
    }
    /**
     * Get the value of update_date
     */ 
    public function getUpdate_date(){
        return $this->update_date;
    }
    /**
     * Set the value of update_date
     * @return  self
     */ 
    public function setUpdate_date($update_date){
        $this->update_date = $update_date;
        return $this;
    }
    /**
     * Get the value of delete_date
     */ 
    public function getDelete_date(){
        return $this->delete_date;
    }

    /**
     * Set the value of delete_date
     * @return  self
     */ 
    public function setDelete_date($delete_date){
        $this->delete_date = $delete_date;
        return $this;
    }
    /**
     * Get the value of who
     */ 
    public function getWho(){
        return $this->who;
    }
    /**
     * Set the value of who
     * @return  self
     */ 
    public function setWho($who){
        $this->who = $who;
        return $this;
    }
    /**
     * Get the value of reference
     */ 
    public function getReference(){
        return $this->reference;
    }
    /**
     * Set the value of reference
     * @return  self
     */ 
    public function setReference($reference){
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get the value of description
     */ 
    public function getDescription(){
        return $this->description;
    }
    /**
     * Set the value of description
     * @return  self
     */ 
    public function setDescription($description){
        $this->description = $description;
        return $this;
    }
    /**
     * Get the value of promotion
     */ 
    public function getPromotion(){
        return $this->promotion;
    }
    /**
     * Set the value of promotion
     * @return  self
     */ 
    public function setPromotion($promotion){
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * Get the value of id_user
     */ 
    public function getId_user(){
        return $this->id_user;
    }
    /**
     * Set the value of id_user
     * @return  self
     */ 
    public function setId_user($id_user){
        $this->id_user = $id_user;
        return $this;
    }
}