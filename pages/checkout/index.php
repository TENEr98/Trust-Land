<title>Checkout</title>
<link rel="stylesheet" href="index.css">

<?php
include '../../UI/header.php';
include '../../application_top.php';
?>

<div class="wrapper">
  <div class="container">
    <div class="split">
      <form class="form" id="form">
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
          <button class="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
const form = $('#form')
form.on('submit', function submit(e) {
  e.preventDefault()
  $.ajax({
    url: "checkout.php",
    success: (response) => {
      console.log(response)
      window.location.assign('/e-commerce/pages/success')
    }
  })
})
</script>