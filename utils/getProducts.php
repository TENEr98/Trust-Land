<?php


function getProducts($con, $category)
{
  $sql = "SELECT * FROM products WHERE category='{$category}'";
  $result = $con->query($sql);

  $return  = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $return[] = [
        'product_id' => $row['product_id'],
        'product_name' => $row['product_name'],
        'price' => $row['price'],
        'product_image' => $row['product_image'],
        'category' => $row['category']
      ];
    }
  } else {
    echo "0 results";
  }

  return $return;
}
