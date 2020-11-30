<?php
include "../php/function.php";
$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];
$cart_product = cartItemById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Added Product To Cart</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <?php include "../parts/navbar.php"; ?>

   <div class="container">
      <div class="card">
         <img src="../img/cat.png" alt="" class="cat_img">
         <h2>Added <?= $product->name ?> To Cart</h2>
         <p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</P>

         

         <div class="display-flex flex-space-between">
            <a href="product_list.php">&#5176; Back to shopping</a>
            <a href="./product_cart.php" class="form-button">Check Cart</a>
         </div>
      </div>
   </div>

   <?php include "../parts/footer.php"; ?>
</body>
</html>