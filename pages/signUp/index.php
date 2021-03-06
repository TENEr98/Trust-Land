<title>Sign Up</title>
<link rel="stylesheet" href="../signIn/index.css" type="text/css">

<?php
include '../../UI/header.php';
include '../../application_top.php';
include '../../utils/randomizer.php';
include '../../utils/Encryption.php';
use utils\Encryption;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']) ;
  $password = mysqli_real_escape_string($con,$_POST['password']);

  if (!empty($username) && !empty($password) && !empty($email) && !is_numeric($username)) {
    $check_email_exists = "select * from users where email = '$email' limit 1";
    $result = mysqli_query($con, $check_email_exists);
    if ($result && mysqli_num_rows($result) > 0) {
      echo "<script>
          alert('E-mail already exists, try another one');
          window.location.href = '/e-commerce/pages/signUp';
        </script>";
      die;
    }

    $encryptor = new Encryption($password);
    $encryptor->encrypt();
    $user_id = random_num(20);
    $query = "insert into users (user_id, username, email, password) values ('$user_id','$username', '$email','$encryptor->password')";
    mysqli_query($con, $query);
    echo "<script>
        alert('Success');
        window.location.href = '/e-commerce/pages/signIn';
      </script>";
    die;
  } else {
    echo "Please enter some valid information!";
  }
}


?>
<div class="wrapper">
  <div class="container">
    <form action="" method="post" class="form">
      <div class="form_field">
        <label for="username" class="legend">Username</label>
        <input type="username" class="field" name="username" required />
      </div>
      <div class="form_field">
        <label for="email" class="legend">E-mail</label>
        <input type="email" class="field" name="email" required />
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