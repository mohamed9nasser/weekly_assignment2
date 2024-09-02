<?php
class Store {
    private $name;
    private $image;
    private $description;
    private $products;

    public function __construct($name, $image, $description) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->products = array(); // Initialize an empty array to store products
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }
}

class Product {
    private $title;
    private $image;
    private $price;

    public function __construct($title, $image, $price) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Create a new store instance
$store = new Store("My Online Store", "./imgs/store_image.jpg", "Welcome to my online store!");

// Create some product instances
$product1 = new Product("Black Tshirt", "./imgs/product1.jpg", 10);
$product2 = new Product("Blue Jacket", "./imgs/product2.jpg", 200);
$product3 = new Product("Jeans", "./imgs/product3.jpg", 30);

// Add products to the store
$store->addProduct($product1);
$store->addProduct($product2);
$store->addProduct($product3);
?>