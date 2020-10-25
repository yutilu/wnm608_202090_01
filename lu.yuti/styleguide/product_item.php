<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Item</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>
   
   <?php include "../parts/navbar.php"; ?>


   <div class="container">
      <div class="basic card">
      	<h2 class="product_detail_h2">PRODUCT ITEM</h2>
      	<p class="product_detail_p">This is the product #<?= $_GET['id']; ?></p>
     	<?php include "../parts/parts_product_single_item.php"; ?>
     	<!-- <div class="a">
     		<?php 
     			//$item = ["","apple", "orange", "banana"];
     			//echo "this is item " . $_GET['id'];
     			//$count = $_GET['id'];
     			//echo "product is: " . $item[$_GET['id']];
     		?>
     	</div> -->
      </div>
   </div>

	<?php include "../parts/footer.php"; ?>
</body>
</html>