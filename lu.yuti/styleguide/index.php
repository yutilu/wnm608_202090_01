<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>
   
   <?php include "../parts/navbar.php"; ?>

   
   <!-- header>h1+p -->
   
   <div class="view-window" style="background-image:url(../img/snacks.jpg)">
      <!-- <h2>Product Name</h2> -->
   </div>
   <div class="container">
      <div class="basic card">
         <h2 class="popular_item_h2">POPULAR ITEMS</h2>
         <!--import popular items-->
         <?php 
         $pageItemCount = 4;
         include "../parts/popularItem.php";
         ?>
      </div>
   </div>



   <?php include "../parts/footer.php"; ?>
</body>
</html>