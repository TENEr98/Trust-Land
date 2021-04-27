<title>Sign Out</title>
<link rel="stylesheet" href="index.css">
<?php
include '../../UI/header.php';
include '../../application_top.php';

?>

<div class="wrapper">
  <div class="container">
    <div class="block-confirmation">
      <h1 class="confirmation">Please, confirm you want to Sign Out!</h1>
      <div class="action-block">
        <button id="confirm">Yes</button>
        <button id="decline">No</button>
      </div>
    </div>
  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>

<script>
var confirm = document.getElementById('confirm')
var decline = document.getElementById('decline')

confirm.addEventListener('click', logOut)
decline.addEventListener('click', redirect)

function redirect() {
  window.history.go(-1)
}

function logOut() {
  localStorage.removeItem('user');
  Array.from(auth).forEach(item => item.style.display = 'block')
  demo.style.display = 'none'
  signOut.style.display = 'none'
  <?php unset($_SESSION['user_id']); ?>
  window.location.assign('/e-commerce/pages/')
}
</script>