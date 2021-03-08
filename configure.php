<?php

function checkerForm($username, $password)
{
  if ($username == 'demo' && $password == 'demo') {
    echo "<script>
      console.log({'username':'demo', password:'demo'});
      localStorage.setItem('user', JSON.stringify({'username':'demo', 'password':'demo'}));
      alert('Success');
      window.location.href = '/e-commerce/pages/productList'
    </script>";
    return true;
  }
  echo "<script>alert('Fail')</script>";
  return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  define('username', $_POST['username']);
  define('password', $_POST['password']);
  if (strlen(username) > 1 && strlen(password) > 1) {
    $bool = checkerForm(username, password);
  }
}
