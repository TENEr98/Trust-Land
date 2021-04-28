<?php
include '../../application_top.php';
if (isset($_POST['products'])) {
  $products = $_POST['products'];

  foreach ($products as $key => $product) {
    $query = "update cart set quantity={$product['quantity']} where product_id={$product['product_id']} and user_id={$_SESSION['user_id']}";
    $con->query($query);
  }

  return true;
}

if (isset($_POST['product'])) {
  $product = $_POST['product'];
  $query = "delete from cart  where quantity={$product['quantity']} and product_id={$product['product_id']} and user_id={$_SESSION['user_id']} and checked_out=0";
  $result = $con->query($query);
  unset($_SESSION['product_ids'][$product['product_id']]);
  return true;
}