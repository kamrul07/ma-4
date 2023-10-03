<?php

class Product {

    public $product_id;
    public $product_name;
    public $product_price;

    function __construct($id, $name, $price) {
        $this->product_id = $id;
        $this->product_name = $name;
        $this->product_price = $this->getFormattedPrice($price);
    }

    function getFormattedPrice($price) {
        return "$" . number_format($price, 2);
    }

    function showDetails() {
        echo "Product Details: \n";
        echo "- ID: $this->product_id \n";
        echo "- Name: $this->product_name \n";
        echo "- Price: $this->product_price \n";
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();