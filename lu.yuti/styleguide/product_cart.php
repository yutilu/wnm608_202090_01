<?php

include_once "../php/function.php";
include_once "../parts/templates.php";

$cart = MYSQLIQuery("SELECT * FROM products WHERE id in (2,3,6)");
//echo $cart[0] -> name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>
   <?php include "../parts/navbar.php"; ?>
   <div class="container">
      <div class="card">
         <h2 class="cart-page-title">PRODUCT CART</h2>
         <div class="cart-page-list">
            
            <?php
            for($i = 0; $i < count($cart); $i++){
            ?>

            <div class="card cart-list-single-item clearfix">
               <div class="cart-single-item-image">
                  <img src="../<?php echo $cart[$i] -> image_main?>" alt="" class="checkout_item_img">
               </div>
               <div class="cart-single-item-info">
                  <div class="single-item-name">
                     <?php echo $cart[$i] -> name; ?>
                  </div>
                  <div class="single-item-description">
                     <?php echo $cart[$i] -> description; ?>
                  </div>
                  <div class="cart-single-item-btn-delete">
                     <img src="../img/delete.svg" alt="">
                  </div>
                  <div class="cart-single-item-price-count">
                     <div class="cart-single-item-price">
                        $ <?php echo $cart[$i] -> price;?>
                     </div>
                     <div class="cart-single-item-count clearfix">
                        <label for="qty">QTY:</label>
                        <select id="qty">Qty
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>+10</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div> <!-- card checkout_list_container clearfix -->

            <?php
            }
            ?>

         </div>
         <div class="cart-page-checkout-block clearfix">
            <div class="cart-page-btn-checkout">
               <a href="product_checkout.php">CHECKOUT</a>
            </div>
            <div class="cart-page-total"><span>Total:</span> $10.50
            </div>
         </div>
      </div> <!-- card -->
   </div> <!-- container -->

   <?php include "../parts/footer.php"; ?>
</body>
</html>