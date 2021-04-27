<?php
function getProducts($con)
{
  $session_user_id = $_SESSION['user_id'];
  if (!isset($session_user_id)) die;
  $query = "select * from cart where user_id='$session_user_id' and checked_out=0";
  $result = $con->query($query);
  $productList = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $query1 = "select * from products where product_id=" . $row['product_id'];
      $result1 = $con->query($query1);
      if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $productList[] = [
          'product_id' => $row['product_id'],
          'product_name' => $row1['product_name'],
          'price' => $row1['price'],
          'product_image' => $row1['product_image'],
          'category' => $row1['category'],
          'quantity' => $row['quantity']
        ];
      }
    }
  }
  return $productList;
}