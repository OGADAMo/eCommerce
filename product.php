<?php
require_once 'inc/header.php';
require_once 'app/classes/Product.php';

$product = new  Product();
$product= $product->read($_GET['product_id']);

echo $_GET['product_id'];
var_dump($product);

?>