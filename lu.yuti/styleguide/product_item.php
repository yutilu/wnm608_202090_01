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
      <div class="products_item_content grid gap">
        <div class="img_content_container col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
        <div class="content_container col-lg-6 col-md-12 col-sm-12 col-xs-12">
           <p class="content_title"><?php echo $product->name;?></p>
           <p class="content_price"><?php echo $product->price;?></p>
           <p class="content">
              <?php echo $product->description;?>
           </p>
          <div class="form-control">
            <label for="product-amount" class="form-label">Amount</label>
            
              <form method="post" action="product_actions.php?action=add-to-cart">
                <input type="hidden" name="product-id" value="<?= $product->id ?>">
                <div class="form-select">
                  <select name="product-amount" id="product-amount">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
                  </select>
                </div>
                <input type="submit" class="btn-normal first_btn" name="add_to_cart" value='Add to cart'>
              </form>
            
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

  

	<?php include "../parts/footer.php"; ?>
  <script src="../js/product_item.js"></script>
</body>
</html>