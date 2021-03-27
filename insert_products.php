<?php
include './utils/PDO_config.php';

$products = [];

$products[] = ['product_name' => 'Nike Air Max 2090','price' => 76.50,'product_image' => file_get_contents("./assets/img/products/shoe/Nike-Air-Max-2090.png")];
$products[] = ['product_name' => 'Nike Air Max 720','price' => 90.99,'product_image' => file_get_contents("./assets/img/products/shoe/nike-air-max-720-818.png")];
$products[] = ['product_name' => 'Nike Air Max React','price' => 55.50,'product_image' => file_get_contents("./assets/img/products/shoe/Nike-Air-Max-270-React-SE.png" )];
              
$products[] = ['product_name' => 'Nike NSW Down Fill Parka','price' => 176.50,'product_image' => file_get_contents("./assets/img/products/jacket/4043004.png" )];
$products[] = ['product_name' => 'NIKE COAT','price' => 590.99,'product_image' => file_get_contents("./assets/img/products/jacket/NIKE-FC-BARCELONA-STRIKE-SDF-BN-CL-2020-2021-COAT.png" )];
$products[] = ['product_name' => 'Nike Sportswear Windrunner','price' => 396.50,'product_image' => file_get_contents("./assets/img/products/jacket/Nike_Sportswear_Windrunner_Down_Fill_Men_s_Hooded_Puffer_Parka.png" )];

$products[] = ['product_name' => 'Nike Dry','price' => 76.50,'product_image' => file_get_contents("./assets/img/products/tshirt/Dry.png" )];
$products[] = ['product_name' => 'Nike Kids','price' => 90.99,'product_image' => file_get_contents("./assets/img/products/tshirt/Kids.png" )];
$products[] = ['product_name' => 'Nike Court','price' => 55.50,'product_image' => file_get_contents("./assets/img/products/tshirt/NikeCourt_Boys_Dri-FIT_GFX_Shortsleeve.png" )];

$sql = "insert into products(product_name, price, product_image) values (:product_name, :price, :product_image)";

foreach ($products as $product) {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($product);
}