<title>Checkout</title>
<link rel="stylesheet" href="index.css">

<?php
include '../../UI/header.php';
session_start();
?>

<div class="wrapper">
  <div class="container">
    <div class="split">
      <form class="form">
        <div class="formField">
          <label for="reciever">Reciever</label>
          <input type="text" required>
        </div>
        <div class="formField">
          <label for="address">Address</label>
          <input type="text" required>
        </div>
        <div class="formField">
          <label for="address">Additional Address</label>
          <input type="text">
        </div>
        <div class="formField">
          <label for="zipcode">Zip Code</label>
          <input type="number" required class="number">
        </div>
        <div class="formField">
          <label for="phone" class="phone">Phone Number</label>
          <input type="number" required class="number">
        </div>
        <div class="formField">
          <label for="phone">Additional Phone Number</label>
          <input type="number" class="number">
        </div>
        <div class="formField">
          <div class="formLabel">
            <label for="payment">Payment</label>
          </div>
          <div class="formRadio">
            <div>
              <input type="radio" id="PayPal" name="payment" value="PayPal" required>
              <label for="PayPal">PayPal</label>
            </div>
            <div>
              <input type="radio" id="Visa" name="payment" value="Visa">
              <label for="Visa">Visa</label>
            </div>
            <div>
              <input type="radio" id="MasterCard" name="payment" value="MasterCard">
              <label for="MasterCard">MasterCard</label>
            </div>
          </div>
        </div>
        <div class="form_submit">
          <button class="submit" onclick="location.href='/e-commerce/pages/success';">Submit</button>
        </div>
      </form>
      <div class="item-basket">
        <div class="item">
          <div class="product-img">
            <h3 class="title">Nike Air Max React</h3>
            <img src="../../assets/img/products/shoe/Nike-Air-Max-270-React-SE.png" alt="shoe" class="img">
          </div>
          <div class="price">
            <p>$55.50</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>