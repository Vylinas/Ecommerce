<?php

require('Entity/Product.class.php');

class Jeans extends Product{
    private $color;    // Color of jeans
    private $size;    // Size of jeans

    public function __construct(string $img, string $price, string $quantity, string $color, string $size) {
        parent::__construct($img, $price, $quantity);
        $this->color = $color;
        $this->size = $size;
    }
    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Set the value of color
     * @return  self
     */ 
    public function setColor($color){
        $this->color = $color;
        return $this;
    }
    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set the value of size
     * @return  self
     */ 
    public function setSize($size){
        $this->size = $size;
        return $this;
    }
}