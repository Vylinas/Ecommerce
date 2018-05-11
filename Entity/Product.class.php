<?php

namespace Entity\Product;

class Product {
    private $img;   // Image of the product.
    private $price;    //Price of the product.
    private $quantity;    //Quantity of the product.
    /**
     *  Construct for product 
     */
    public function __construct(string $img, string $price, string $quantity) {
        $this->img = $img;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    /**
     * Get the value of img
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
     */ 
    public function getPrice()
    {
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
    public function getQuantity()
    {
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
}