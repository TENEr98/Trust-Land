<title>Basket</title>
<link rel="stylesheet" href="index.css">
<?php
include '../../UI/header.php';
?>
<div class="wrapper">
  <div class="container">
    <div class="basket">
      <div class="item">
        <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Air Max 2090</h5>
        <div class="image-wrapper-shoe">
          <img src="../../assets/img/products/shoe/Nike-Air-Max-2090.png" alt="shoes" class="img">
        </div>

      </div>
      <div class="item-price">
        <div class="wrapper-price-changer">
          <input type="button" value="-" id="minus" onclick="minus()" class="change">
          <input type="text" size="25" value="1" id="count" class="input-text">
          <input type="button" value="+" id="plus" onclick="plus()" class="change">
        </div>
        <div id="notice" style="color:red;"></div>
        <p class="price" id="price">$76.50</p>
      </div>

    </div>
    <div class="total-price">
      <h3 class="total">Total result</h3>
      <h4 class="result" id="result"></h4>
    </div>
    <div class="wrapper-checkout">
      <button class="checkout" onclick="location.href='/e-commerce/pages/checkout';">Proceed to Checkout</button>
    </div>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>
<script>
  var count = 1;
  var countEl = document.getElementById("count");
  var price = document.getElementById('price');
  var result = document.getElementById('result');
  result.innerHTML = `$${76.50 * count}`;

  function plus() {
    count++;
    countEl.value = count;
    price.innerHTML = `$${76.50 * count}`;
    result.innerHTML = `$${76.50 * count}`;
    if (count > 8) {
      document.getElementById('notice').innerHTML = "We currently don't have this quantity readily available which may impact our turn-around time.";
    }
  }

  function minus() {
    if (count > 1) {
      count--;
      countEl.value = count;
      price.innerHTML = `$${76.50 * count}`;
      result.innerHTML = `$${76.50 * count}`;
      if (count < 8) {
        document.getElementById('notice').innerHTML = "";
      }
    }
  }
</script>