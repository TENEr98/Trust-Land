<?php
function getProducts($con, $pdo)
{
  $sql = "select * from products";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  return $row;
}
?>