<title>Product List</title>
<link rel="stylesheet" href="index.css">
<?php
include '../../UI/header.php';
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
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Air Max React</h5>
            <div class="image-wrapper-shoe">
              <img src="../../assets/img/products/shoe/Nike-Air-Max-270-React-SE.png" alt="shoes" class="img">
            </div>
            <p class="price">$55.50</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
        </div>
      </div>
      <div class="category">
        <h1 class="category-name">Jackets</h1>
        <div class="items-block">
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike NSW Down Fill Parka</h5>
            <div class="image-wrapper-jacket">
              <img src="../../assets/img/products/jacket/4043004.png" alt="jacket" class="img-jacket-cursed">
            </div>
            <p class="price">$176.50</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">NIKE COAT</h5>
            <div class="image-wrapper-jacket">
              <img src="../../assets/img/products/jacket/NIKE-FC-BARCELONA-STRIKE-SDF-BN-CL-2020-2021-COAT.png" alt="jacket" class="img">
            </div>
            <p class="price">$590.99</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Sportswear Windrunner</h5>
            <div class="image-wrapper-jacket">
              <img src="../../assets/img/products/jacket/Nike_Sportswear_Windrunner_Down_Fill_Men_s_Hooded_Puffer_Parka.png" alt="jacket" class="img">
            </div>
            <p class="price">$396.50</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
        </div>
      </div>
      <div class="category">
        <h1 class="category-name">T-Shirt</h1>
        <div class="items-block">
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Dry</h5>
            <div class="image-wrapper-tshirt">
              <img src="../../assets/img/products/tshirt/Dry.png" alt="T-Shirt" class="img">
            </div>
            <p class="price">$76.50</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Kids</h5>
            <div class="image-wrapper-tshirt">
              <img src="../../assets/img/products/tshirt/Kids.png" alt="T-Shirt" class="img">
            </div>
            <p class="price">$90.99</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
          <div class="item">
            <h5 class="name" onclick="location.href='/e-commerce/pages/productDetails';">Nike Court</h5>
            <div class="image-wrapper-tshirt">
              <img src="../../assets/img/products/tshirt/NikeCourt_Boys_Dri-FIT_GFX_Shortsleeve.png" alt="T-Shirt" class="img">
            </div>
            <p class="price">$55.50</p>
            <div class="add">
              <button class="btn-add">Buy</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include '../../UI/footer.php';
    ?>
  </div>
</div>