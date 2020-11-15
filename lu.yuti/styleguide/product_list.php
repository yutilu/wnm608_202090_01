<?php
include_once "../php/function.php";
include_once "../parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>
   <?php include "../parts/meta.php"; ?>
</head>
<body>
   <?php include "../parts/navbar.php"; ?>
   <div class="container">
      <div class="basic card">
         <h2 class="product_list_title_h2">PRODUCT LIST</h2>
         <div class="form-control">
            <div class="product-list grid gap">
               <?php
                  $pageItemCount = 12;
                  echo array_reduce(
                     MYSQLIQuery("SELECT * FROM products LIMIT $pageItemCount"),
                     "makeProductList"
                  );
               ?>
            </div>
         </div>
      </div>
   </div>

   <?php include "../parts/footer.php"; ?>
</body>
</html>