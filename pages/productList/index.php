<title>Product List</title>
<link rel="stylesheet" href="index.css">
<?php
include '../../UI/header.php';
session_start();

include '../../application_top.php';
include '../../utils/check_signedIn.php';
include '../../utils/getProducts.php';

is_signedIn($con);
$shoes = getProducts($con, 'shoe');
$jackets = getProducts($con, 'jacket');
$tshirts = getProducts($con, 'tshirt');

$con->close();

?>
<div class="wrapper">
  <div class="container">
    <div class="wrap-retailer">
      <h1 class="retailer">Nike New Retailer</h1>
      <div class="image-wrapper-logo">
        <img src="../../assets/img/logo/nike.png" alt="nike logo" class="logo-img">
      </div>
    </div>
    <div class="categories">
      <div class="category">
        <h1 class="category-name">Shoes</h1>
        <div class="items-block">
          <?php foreach ($shoes as $shoe) : ?>
            <form class="item" action="/e-commerce/pages/basket" method="POST">
              <a href="/e-commerce/pages/productDetails?product_id=<?= $shoe['product_id'] ?>" class="name-link">
                <h5 class="name">
                  <?= $shoe['product_name'] ?>
                </h5>
              </a>
              <div class="image-wrapper-shoe">
                <img src="../../assets/img/products/<?= $shoe['category'] . '/' . $shoe['product_image'] ?>" alt="shoes" class="img">
              </div>
              <p class="price">$<?= $shoe['price'] ?></p>
              <div class="add">
                <button class="btn-add" type="submit" name="add">Buy</button>
                <input type="hidden" aria-labelledby="buy" name="product_id" value="<?= $shoe['product_id'] ?>">
              </div>
            </form>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="category">
        <h1 class="category-name">Jackets</h1>
        <div class="items-block">
          <?php foreach ($jackets as $jacket) : ?>
            <form class="item" action="/e-commerce/pages/basket" method="POST">
              <a href="/e-commerce/pages/productDetails?product_id=<?= $jacket['product_id'] ?>" class="name-link">
                <h5 class="name">
                  <?= $jacket['product_name'] ?>
                </h5>
              </a>
              <div class="image-wrapper-jacket">
                <img src="../../assets/img/products/<?= $jacket['category'] . '/' . $jacket['product_image'] ?>" alt="<?= $jacket['product_name'] ?>" class="img">
              </div>
              <p class="price">$<?= $jacket['price'] ?></p>
              <div class="add">
                <button class="btn-add" type="submit" name="add">Buy</button>
                <input type="hidden" aria-labelledby="buy" name="product_id" value="<?= $jacket['product_id'] ?>">
              </div>
            </form>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="category">
        <h1 class="category-name">T-Shirt</h1>
        <div class="items-block">
          <?php foreach ($tshirts as $tshirt) : ?>
            <form class="item" action="/e-commerce/pages/basket" method="POST">
              <a href="/e-commerce/pages/productDetails?product_id=<?= $tshirt['product_id'] ?>" class="name-link">
                <h5 class="name">
                  <?= $tshirt['product_name'] ?>
                </h5>
              </a>
              <div class="image-wrapper-tshirt">
                <img src="../../assets/img/products/<?= $tshirt['category'] . '/' . $tshirt['product_image'] ?>" alt="<?= $tshirt['product_name'] ?>" class="img">
              </div>
              <p class="price">$<?= $tshirt['price'] ?></p>
              <div class="add">
                <button class="btn-add" type="submit" name="add">Buy</button>
                <input type="hidden" aria-labelledby="buy" name="product_id" value="<?= $tshirt['product_id'] ?>">
              </div>
            </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php
    include '../../UI/footer.php';
    ?>
  </div>
</div>