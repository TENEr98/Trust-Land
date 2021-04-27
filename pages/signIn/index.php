<title>Sign In</title>
<link rel="stylesheet" href="./index.css" type="text/css">
<?php
include '../../UI/header.php';
include '../../configure.php';
?>
<div class="wrapper">
  <div class="container">
    <form action="" method="post" class="form">
      <div class="form_field">
        <label for="username" class="legend">Username</label>
        <input type="text" class="field" name="username" required />
      </div>
      <div class="form_field">
        <label for="password" class="legend">Password</label>
        <input type="password" class="field" name="password" required />
      </div>
      <div class="form_submit">
        <button type="submit" class="submit">Sign In</button>
      </div>
      <a href="/e-commerce/pages/signUp" class="forget">GET AN ACCOUNT &#8594;</a>
    </form>

  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>