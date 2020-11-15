<?php 
include_once "../php/function.php";
include_once "../parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Item</title>
   <?php include "../parts/meta.php"; ?>
</head>
<body> 
  <?php
    include "../parts/navbar.php";
    $holder =$_GET['id'];
    $product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];
  ?>
  <div class="container">
    <div class="card">
      <a href="./product_list.php" class="product_list_back_btn">&#5176; Back to snacks list</a>
      <div class="products_item_content">
        <div class="img_content_container">
          <img src="../<?php echo $product->image_main;?>" class="item_img item_img_main">
          <ul class="thum_img_container">
            <li class="thum_img_li">
              <img src="../<?php echo $product->image_main;?>" alt="" class="thum_img">
            </li>
            <li class="thum_img_li">
              <img src="../<?php echo explode(",",$product->image_other)[0];?>" alt="" class="thum_img">
            </li>
          </ul>
        </div>
        <div class="content_container">
           <p class="content_title"><?php echo $product->name;?></p>
           <p class="content_price"><?php echo $product->price;?></p>
           <p class="content">
              <?php echo $product->description;?>
           </p>
           <div class="btn_container">
              <a href="added_to_cart.php" class="btn-normal first_btn">Add to cart</a>
              <div class="btn-count clearfix">
                 <div class="btn-count-inner btn-count-minus">-</div>
                 <div class="btn-count-inner btn-count-num">1</div>
                 <div class="btn-count-inner btn-count-add">+</div>
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="basic card">
         <h2 class="product_list_title_h2">RELATED PRODUCTS</h2>
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

   <!-- <div class="container">
      <div class="basic card">
      	<h2 class="product_detail_h2">PRODUCT ITEM</h2>
      	<p class="product_detail_p">This is the product #<?= $_GET['id']; ?></p>
     	<?php include "../parts/parts_product_single_item.php"; ?>

     	<div class="a">
     		<?php 
     			//$item = ["","apple", "orange", "banana"];
     			//echo "this is item " . $_GET['id'];
     			//$count = $_GET['id'];
     			//echo "product is: " . $item[$_GET['id']];
     		?>
     	</div>
      </div>
   </div> -->

	<?php include "../parts/footer.php"; ?>
  <script src="../js/product_item.js"></script>
</body>
</html>