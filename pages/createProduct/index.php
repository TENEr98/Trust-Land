<?php
include '../../UI/header.php';
include '../../application_top.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = mysqli_real_escape_string($con,$_POST['product_name']);
  $price = (float) mysqli_real_escape_string($con,$_POST['price']);
  $category = mysqli_real_escape_string($con,$_POST['category']);
  $fileName = $_FILES["product_image"]["name"];
  if ($_FILES["product_image"]["size"] > 5000000) {
    echo "<script>
    alert('The image must be size lower than 5Mb');
  </script>";
  }
  $directory = "../../assets/img/products/" . $category . "/" . $fileName;
  move_uploaded_file($_FILES["product_image"]["tmp_name"], $directory);
  $query = "INSERT INTO products (product_name, price, product_image, category) VALUES ('$name', $price, '$fileName', '$category')";
  $result = $con->query($query);

  echo "<script>
    alert('Product item has been added');
  </script>";
}
?>
<title>Create New Products</title>
<link rel="stylesheet" href="index.css">
<div class="wrapper">
  <div class="container">
    <form action="" method="POST" class="form-creation" enctype="multipart/form-data">
      <div class="formField">
        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" maxlength="50" required>
      </div>
      <div class="formField">
        <label for="price">Product Price</label>
        <input type="number" name="price" class="number" maxlength="16" required>
      </div>
      <div class="formField">
        <label for="product_image">Product Image</label>
        <input type="file" name="product_image" accept="image/*" required>
      </div>
      <div class="formField">
        <label for="category">Product Category</label>
        <select name="category" id="" required>
          <option value="" id="empty"></option>
          <option value="shoe">Shoe</option>
          <option value="jacket">Jacket</option>
          <option value="tshirt">Tshirt</option>
        </select>
      </div>
      <div class="formSubmit">
        <button class="submit">Create New Product</button>
      </div>
    </form>
  </div>
  <?php include '../../UI/footer.php' ?>
</div>