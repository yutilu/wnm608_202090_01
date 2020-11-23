<?php

function makeProductList($r,$o) {
   return $r.<<<HTML
   <div class="col-xs-3 product-card">
         <img src="../$o->image_main" alt="">
         <div class="product-title">$o->name</div>
         <div class="product-price">$o->price</div>
         <a href="product_item.php?id=$o->id" class="btn-shop-now">Shop now</a>
      </div>
   HTML;
}





///HA




function selectAmount($amount=1,$total=10) {
   $output = "<select name='product-amount'>";
   for($i=1;$i<=$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}




function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="cart-list-single-item clearfix">
   <div class="cart-single-item-image">
      <img src="../$o->image_main" class="cart_item_image">
   </div>
   <div class="cart-single-item-info">
      <strong>$o->name</strong>
      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
         <input type="submit" value="Delete" class="cart-single-item-btn-delete">
      </form>

      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <input type="hidden" name="product-id" value="$o->id">
         <div class="cart-single-item-count">
            $selectamount
         </div>
      </form>
      <div class="cart-single-item-price">&dollar;$totalfixed</div>
   </div>
</div>
HTML;
}




function cartTotals() {

$cart = getCartItems();

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);

$pricefixed = number_format($cartprice,2,'.','');
$tax = number_format($cartprice*0.0725,2,'.','');
$taxed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-section display-flex">
   <div class="flex-stretch" style='margin-bottom: 8px;'><strong>Sub Total</strong></div>
   <div class="flex-none">&dollar;$cartprice</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch" style='margin-bottom: 8px;'><strong>Taxes</strong></div>
   <div class="flex-none">&dollar;$tax</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Total</strong></div>
   <div class="flex-none">&dollar;$taxed</div>
</div>
<div class="card-section">
   <a href="product_checkout.php" class="cart-page-btn-checkout">Checkout</a>
</div>
HTML;
}