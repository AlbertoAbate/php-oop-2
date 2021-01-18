<?php

include_once __DIR__ . '/Product.php';

// classe estesa di Product

class pc extends Product {
    public $address;

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress($address) {
        return $this->$address;
    }