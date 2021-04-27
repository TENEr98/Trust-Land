<?php
include './application_top.php';

$products = [];

$products[] = ['product_name' => 'Nike Air Max 2090', 'price' => 76.50, 'product_image' => "Nike-Air-Max-2090.png"];
$products[] = ['product_name' => 'Nike Air Max 720', 'price' => 90.99, 'product_image' => "nike-air-max-720-818.png"];
$products[] = ['product_name' => 'Nike Air Max React', 'price' => 55.50, 'product_image' => "Nike-Air-Max-270-React-SE.png"];

$products[] = ['product_name' => 'Nike NSW Down Fill Parka', 'price' => 176.50, 'product_image' => "4043004.png"];
$products[] = ['product_name' => 'NIKE COAT', 'price' => 590.99, 'product_image' => "NIKE-FC-BARCELONA-STRIKE-SDF-BN-CL-2020-2021-COAT.png"];
$products[] = ['product_name' => 'Nike Sportswear Windrunner', 'price' => 396.50, 'product_image' => "Nike_Sportswear_Windrunner_Down_Fill_Men_s_Hooded_Puffer_Parka.png"];

$products[] = ['product_name' => 'Nike Dry', 'price' => 76.50, 'product_image' => "Dry.png"];
$products[] = ['product_name' => 'Nike Kids', 'price' => 90.99, 'product_image' => "Kids.png"];
$products[] = ['product_name' => 'Nike Court', 'price' => 55.50, 'product_image' => "NikeCourt_Boys_Dri-FIT_GFX_Shortsleeve.png"];

foreach ($products as $product) {
    $sql = "INSERT INTO products (product_name, price, product_image) VALUES ('{$product['product_name']}', {$product['price']}, '{$product['product_image']}')";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
$conn->close();