<title>Product List</title>
<link rel="stylesheet" href="index.css">
<?php
include '../../UI/header.php';
include '../../application_top.php';


$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
if (isset($params['product_id'])) {
  $productId = $params['product_id'];
  $query = "select * from products where product_id=$productId";
  $result = $con->query($query);
  if ($result->num_rows == 0) {
    echo "<script>alert('You are seeking for unknown product id');</script>";
  }
  $return  = [];
  if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
      $return[] = [
        'product_id' => $row['product_id'],
        'product_name' => $row['product_name'],
        'price' => $row['price'],
        'product_image' => $row['product_image'],
        'category' => $row['category']
      ];
    }
  }
}

?>
<div class="wrapper">
  <div class="container">
    <?php foreach ($return as $prod) : ?>
    <div class="product-details">
      <div class="product-img">
        <h3 class="title"><?= $prod['product_name'] ?></h3>
        <img src="../../assets/img/products/<?= $prod['category'] . '/' .  $prod['product_image'] ?>"
          alt="<?= $prod['product_name'] ?>" class="img">
      </div>
      <div class="desc">
        <div class="product-desc">
          <p>The Nike Air Max React unit delivers unrivalled, all-day comfort. Nike React technology delivers an
            extremely smooth ride, reduces weight and adds flexibility. The no-sew, synthetic overlays on the upper
            provides a lightweight feel and flexible fit. The soft, padded collar with low-cut design feels comfortable.
          </p>
        </div>
        <div class="product-price">
          <p>$<?= $prod['price'] ?></p>
        </div>
        <div class="product-buy">
          <button class="product-add" type="submit" name="add">BUY</button>
          <input type="hidden" aria-labelledby="buy" name="product_id" value="<?= $prod['product_id'] ?>">
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>