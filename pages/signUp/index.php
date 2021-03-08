<title>Sign Up</title>
<link rel="stylesheet" href="../signIn/index.css" type="text/css">
<?php
include '../../UI/header.php';
?>
<div class="wrapper">
  <div class="container">
    <form action="" method="post" class="form">
      <div class="form_field">
        <label for="username" class="legend">Username</label>
        <input type="username" class="field" name="username" required/>
      </div>
      <div class="form_field">
        <label for="password" class="legend">Password</label>
        <input type="password" class="field" name="password" required>
      </div>
      <div class="form_submit">
        <button type="submit" class="submit">Sign Up</button>
      </div>
      <a href="/e-commerce/pages/signIn" class="forget">&#8592; HAVE AN ACCOUNT? </a>
    </form>

  </div>
  <?php
  include '../../UI/footer.php';
  ?>
</div>
<?php
include '../../configure.php';
