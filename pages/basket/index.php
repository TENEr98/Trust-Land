<title>Basket</title>
<link rel="stylesheet" href="index.css">

<?php

include '../../UI/header.php';
include '../../application_top.php';
include '../../utils/basket_products.php';

if (!array_key_exists('user_id', $_SESSION)) header("Location:/e-commerce/pages/signIn");

$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
if (isset($url_components['query'])) {
  parse_str($url_components['query'], $params);


  if (isset($params['id'])) {
    $productId = $params['id'];
    $user_id = $_SESSION['user_id'];
    // unset($_SESSION['product_ids']);

    if (!array_key_exists('product_ids', $_SESSION)) {
      $_SESSION['product_ids'] = array();
    }

    $product_ids = $_SESSION['product_ids'];

    if (empty($product_ids)) {
      array_push($_SESSION['product_ids'], $params['id']);
      $insertProduct = "insert into cart (user_id, product_id, quantity, checked_out) values ($user_id,$productId,1,0)";
      $con->query($insertProduct);
    } else if (!in_array($productId, $product_ids)) {
      array_push($_SESSION['product_ids'], $params['id']);
      $insertProduct = "insert into cart (user_id, product_id, quantity, checked_out) values ($user_id,$productId,1,0)";
      $con->query($insertProduct);
    }
  }
}
$productList = getProducts($con);

?>
<div class="wrapper">
  <div class="container">
    <?php
    if (!empty($productList)) {
      foreach ($productList as $product) : ?>
    <div class="basket" id="<?= $product['product_id'] ?>">
      <div class="item">
        <h5 class="name"><?= $product['product_name'] ?></h5>
        <div class="image-wrapper">
          <img src="../../assets/img/products/<?= $product['category'] . '/' .  $product['product_image'] ?>"
            alt="shoes" class="img">
        </div>
      </div>
      <div class="item-price">
        <div class="wrapper-price-changer">
          <input type="button" value="-" onclick="minus(this)" class="change">
          <input type="text" size="25" value="<?= $product['quantity'] ?>" class="input-text">
          <input type="button" value="+" onclick="plus(this)" class="change">
        </div>
        <div id="notice" style="color:red;"></div>
        <p class="price fix-prices">$<?= $product['price'] ?></p>
        <button class="delete" onclick="deleteItem(this)">Delete</button>
      </div>
    </div>
    <?php endforeach;
    } else { ?>
    <div class="empty">
      <h1 class="no-products">
        No Products Added Yet
      </h1>
    </div>
    <?php } ?>
    <?php if (!empty($productList)) { ?>
    <div class="total-price">
      <h3 class="total">Total result</h3>
      <h4 class="result" id="result"></h4>
    </div>
    <div class="wrapper-checkout">
      <button class="checkout" onclick="checkout(this)">Proceed to Checkout</button>
    </div>
    <?php } ?>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
var countEl = document.querySelectorAll(".input-text");
var result = document.getElementById('result');

function calculateTotal() {
  if (countEl.length >= 1) {
    const fixPriceItem = document.querySelectorAll('.fix-prices')
    const total = []
    countEl.forEach((el, idx) => {
      let tempPrice = fixPriceItem[idx].innerText.replace('$', '')
      total.push(el.value * tempPrice)
    })
    result.innerText = `$${total.reduce((prev, curr) => curr + prev, 0).toFixed(2)}`
  }
}
calculateTotal()

function plus(el) {
  var parent = el.closest('.basket')
  var count = parent.querySelector(".input-text");
  count.value++
  calculateTotal()
}

function minus(el) {
  var parent = el.closest('.basket')
  var count = parent.querySelector(".input-text");
  if (count.value > 1) {
    count.value--
  }
  calculateTotal()
}


function checkout(e) {
  const items = document.querySelectorAll('.basket')
  const products = []
  const product_items = items.forEach((el, idx) => {
    let input = el.querySelector('.input-text')
    let quantity = input.value
    let product_id = el.id
    products.push({
      quantity,
      product_id
    })
  })
  $.ajax({
    method: "POST",
    url: "proceed.php",
    data: {
      products
    },
    success: (response) => {
      console.log(response)
      window.location.assign('/e-commerce/pages/checkout')
    }
  })
  console.log(products)
  // window.location.assign(`/e-commerce/pages/checkout`)
}
</script>