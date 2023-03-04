<?php


// include functions pho

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

echo($total);