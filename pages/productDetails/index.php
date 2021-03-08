<title>Product List</title>
<link rel="stylesheet" href="index.css">
<?php
include '../../UI/header.php';
?>
<div class="wrapper">
  <div class="container">
    <div class="product-details">
      <div class="product-img">
        <h3 class="title">Nike Air Max React</h3>
        <img src="../../assets/img/products/shoe/Nike-Air-Max-270-React-SE.png" alt="shoe" class="img">
      </div>
      <div class="desc">
        <div class="product-desc">
          <p>The Nike Air Max React unit delivers unrivalled, all-day comfort. Nike React technology delivers an extremely smooth ride, reduces weight and adds flexibility. The no-sew, synthetic overlays on the upper provides a lightweight feel and flexible fit. The soft, padded collar with low-cut design feels comfortable.</p>
        </div>
        <div class="product-price">
          <p>$55.50</p>
        </div>
        <div class="product-buy">
          <button class="product-add">BUY</button>
        </div>
      </div>
    </div>
    <div class="recommendations">
      <div class="item">
        <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Air Max 2090</h5>
        <div class="image-wrapper-shoe">
          <img src="../../assets/img/products/shoe/Nike-Air-Max-2090.png" alt="shoes" class="img">
        </div>
        <p class="price">$76.50</p>
        <div class="add">
          <button class="btn-add">Buy</button>
        </div>
      </div>
      <div class="item">
        <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Air Max 720</h5>
        <div class="image-wrapper-shoe">
          <img src="../../assets/img/products/shoe/nike-air-max-720-818.png" alt="shoes" class="img-cursed">
        </div>
        <p class="price">$90.99</p>
        <div class="add">
          <button class="btn-add">Buy</button>
        </div>
      </div>
    </div>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>