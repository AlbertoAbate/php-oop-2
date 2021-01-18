<?php

// Product class - modello principale

class Product {
    // Proprieties
    public $name_brand;
    public $price;
    public $quantity;

    // Costruttore
    public function __construct($name_brand, $type, $price) {
        $this->name_brand = $name_brand;
        $this->type = $type;
        $this->price = $price;

    }


    // Methods
    public function printInfo() {
        return $this->type . ' ' . 'brand' . ' ' . $this->name_brand;
    }

}