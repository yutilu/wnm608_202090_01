<?php
include_once "../php/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <?php 
   include_once "../parts/meta.php"; 
   include_once "../php/function.php";
   include_once "../parts/templates.php";
   ?>
</head>
<body>
   
   <?php include "../parts/navbar.php"; ?>

   
   <!-- header>h1+p -->
   
   <div class="view-window" style="background-image:url(../img/snacks.jpg)">
      <!-- <h2>Product Name</h2> -->
   </div>
   <div class="container">

      <div class="section-introduction card">
         <div class="section-introduction-left"><img src="../img/chips.png" alt=""></div>
         <div class="section-introduction-right">
            <div class="section-introduction-right-1">Yum New Arrivals</div>
            <div class="section-introduction-right-2">Limited Time 10% OFF.</div>
         </div>
      </div>

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
         <?php 
         //$pageItemCount = 4;
         //include "../parts/popularItem.php";
         ?>
      </div>
   </div>





   <?php include "../parts/footer.php"; ?>
</body>
</html>