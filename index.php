<?php 

$section = $_GET['section'] ?? 'home';

if($section == 'about-us'){
  include 'controller/aboutUs.php';
} elseif($section == 'home') {
  include 'controller/homePage.php';
} elseif($section == 'contact') {
  include 'controller/contact.php';
}


echo "yay"; 



?>