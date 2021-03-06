<?php
include_once "../php/function.php";
include_once "../parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Thank you</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

	<?php include "../parts/navbar.php"; ?>

   <div class="container">
      <div class="card card-confirmation-page">
         <div class="confirmation-page-content-block">
            <p class="confirmation-page-title">Thank you for you order</p>
            <p class="confirmation-page-subtitle">You will receive the confirmation shortly at your email.</p>
            <div class="confirmation-page-btn-goback">
               <a href="product_list.php">Back to shopping</a>
            </div> 
         </div>
      </div>
   </div>

   <div class="container">
      <div class="basic card">
         <h2 class="popular_item_h2">POPULAR ITEMS</h2>
         <!--import popular items-->
         <div class="container">
            <div class="basic card">
               <div class="form-control">
                  <div class="product-list grid gap">
                     <?php
                        $pageItemCount = 4;
                        echo array_reduce(
                           MYSQLIQuery("SELECT * FROM products LIMIT $pageItemCount"),
                           "makeProductList"
                        );
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


	<?php include "../parts/footer.php"; ?>
</body>
</html>