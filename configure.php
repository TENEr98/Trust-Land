<?php
include("application_top.php");
//require("/utils/Encryption.php");



if (array_key_exists('user_id', $_SESSION)) {
  echo "<script>
  alert('You have Signed In');
  window.location.href = '/e-commerce/pages/productList'
</script>";
}

function checkerForm($username)
{
  echo "<script>
      alert('Success');
      localStorage.setItem('user', '" . $username . "');
      window.location.href = '/e-commerce/pages/productList'
    </script>";
  return true;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);


  if (!empty($username) && !empty($password) && !is_numeric($username)) {
    $encryption = new Encryption($password);
    $encryption->encrypt();
    $query = "select * from users where username = '$username' and password = $encryption.$password  limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        var_dump($encryption.$password);
//        if ($pass_check = password_verify($_POST["password"], $user_data["password"])) {
//          $_SESSION['user_id'] = $user_data['user_id'];
//          checkerForm($user_data['username']);
//        }
      }
    }
  }
}