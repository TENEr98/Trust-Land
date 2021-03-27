<?php


include("application_top.php");
  
function checkerForm($username)
{
    echo "<script>
      alert('Success');
      localStorage.setItem('user', '".$username."');
      window.location.href = '/e-commerce/pages/productList'
    </script>";
    return true;
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password) && !is_numeric($username))
  {

    //read from database
    $query = "select * from users where username = '$username' limit 1";
    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {

        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password)
        {

          $_SESSION['user_id'] = $user_data['user_id'];
          checkerForm($user_data['username']);
        }
      }
    }
  }
}