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

         <!-- <ul> -->
            <!-- li*10>a[href='product_item.php?id=$']>{Product $} -->
            <!-- <li><a href="product_item.php?id=1">ORION Koreabob Seaweed<div>$2.1</div></a></li>
            <li><a href="product_item.php?id=2">HAITAI Chip<div>$2.0</div></a></li>
            <li><a href="product_item.php?id=3">JINJU Fish Sausage<div>$6.0</div></a></li>
            <li><a href="product_item.php?id=4">ORION Chocoboy Snack<div>$3.3</div></a></li>
            <li><a href="product_item.php?id=5">CALBEE Potato Stick<div>$2.3</div></a></li>
            <li><a href="product_item.php?id=6">HOUSE Vitamin Jelly<div>$3.5</div></a></li>
            <li><a href="product_item.php?id=7">UHA Milk Candy<div>$4.2</div></a></li>
            <li><a href="product_item.php?id=8">MR.ITO Cookies<div>$5.5</div></a></li>
            <li><a href="product_item.php?id=9">DAOXIANGCUN Mochi<div>$4.0</div></a></li>
            <li><a href="product_item.php?id=10">MOUTHDOLEAK candy<div>$4.0</div></a></li>
            <li><a href="product_item.php?id=10">YUMEI Jujube Cake<div>$3.5</div></a></li>
            <li><a href="product_item.php?id=10">DIEHUAPAI Spiced Broad Beans<div>$2.0</div></a></li> -->
         <!-- </ul> -->
         <?php
         $pageItemCount = 12;
         include "../parts/parts_product_item.php";
         ?>

      </div>
   </div>

   <?php include "../parts/footer.php"; ?>
</body>
</html>