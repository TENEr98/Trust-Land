<?php
include '../../application_top.php';

$products = $_POST['products'];

foreach ($products as $key => $product) {
  $query = "update cart set quantity={$product['quantity']} where product_id={$product['product_id']} and user_id={$_SESSION['user_id']}";
  $con->query($query);
}

return true;