<?php

class Product {
	private $price;
  private $weight;
	private $freeShipping = false;
	function __construct( $price, $weight) {
		$this->price = $price;
		$this->weight = $weight;
	}

	function getWeight() {
		return $this->weight;
	}
	function getPrice() {
		return $this->price;
	}
	function setFreeShipping() {
		$this->freeShipping = true;
	}
	function getFreeShipping() {
		return $this->freeShipping;
	}
}

class Shipping {
	private $totalShipping;
	private $products;
	private $pricePerKg;

	public function __construct($priceperkg) {
		$this->pricePerKg = $priceperkg;
	}

	public function addProducts (Product $prodcut) {
		$this->products[] = $prodcut;

	}

	public function calculatetotalShipping () {
		foreach ($this->products as $product){
			if(!$product->getFreeShipping()){
				$this->totalShipping +=  $product->getWeight() * $this->pricePerKg;
			}
		}
	}

	public function gettotalShipping () {
		return $this->totalShipping;
}
}

$product = new Product(5, 1);
$product2 = new Product(7, 1);
$product3 = new Product(17, 2);
$product3->setFreeShipping();
$priceperkg = 15;

$shipping = new Shipping($priceperkg);
$shipping->addProducts($product);
$shipping->addProducts($product2);
$shipping->addProducts($product3);
$shipping->calculatetotalShipping();
$total = $shipping->gettotalShipping();

var_dump($total);



// include functions pho
/*
function calculateShipping($productWeight, $pricePerKg, $hasfreeshipping) {
  if($hasfreeshipping){
    return 0;  
  }
  else {
    return $productWeight * $pricePerKg;  
  }
  
} 

//$products = $_SESSION['products'];
$products[1]['productWeight'] = 1;
$products[1]['pricePerKg'] = 6;
$products[1]['freeshipping'] = true;
$products[2]['productWeight'] = 2;
$products[2]['pricePerKg'] = 8;
$products[2]['freeshipping'] = false;

$priceperkg = 5;
 
$total = 0;

foreach ($products as $product) {
  $total = calculateShipping($product['productWeight'], $priceperkg, $product['freeshipping']);
}

echo($total);*/