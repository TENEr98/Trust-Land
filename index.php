<script>
    if (window.location.pathname === '/e-commerce/') {
        location.assign('/e-commerce/pages/productList')
    }else {
        location.assign('/e-commerce/pages/productList')
    }
</script>
<?php
switch ($_SERVER['SERVER_NAME']) {
  case '/e-commerce/pages/signIn':
  {
    include('./pages/signIn');
    break;
  }
  case '/e-commerce/pages/singUp':
  {
    include('./pages/signUp');
    break;
  }
  case '/e-commerce/pages/productDetails':
  {
    include('./pages/productDetails');
    break;
  }
  case '/e-commerce/pages/basket':
  {
    include('./pages/basket');
    break;
  }
  default:
  {
    include('./pages/productList');
    break;
  }
}
?>