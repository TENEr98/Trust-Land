<title>Checkout</title>
<link rel="stylesheet" href="index.css">

<?php
include '../../UI/header.php';
include '../../application_top.php';

unset($_SESSION['product_ids']);

?>

<div class="wrapper">
  <div class="container">
    <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
      <h1 class="success">Success</h1>
      <p class="text">We received your purchase request<br /> We'll be in touch shortly!</p>
      <a href="/e-commerce/pages/productList/" class="anchor-home">Home</a>
    </div>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>