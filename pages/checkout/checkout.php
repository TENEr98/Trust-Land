<?php

include '../../application_top.php';
$product_query = "select * from cart where user_id={$_SESSION['user_id']} and checked_out=0";
$productList = $con->query($product_query);

foreach ($productList as $key => $product) {
  $query = "update cart set checked_out=1 where product_id={$product['product_id']}";
  $con->query($query);
}

return true;