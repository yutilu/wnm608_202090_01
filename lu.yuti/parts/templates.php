<?php

function makeProductList($r,$o) {
   return $r.<<<HTML
   <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 product-card">
         <img src="../$o->image_main" alt="">
         <div class="product-title">$o->name</div>
         <div class="product-price">$$o->price</div>
         <a href="product_item.php?id=$o->id" class="btn-shop-now">Shop now</a>
      </div>
   HTML;
}





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
   <div class="cart-list-single-item clearfix grid gap">

      <div class="cart-single-item-image col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <img src="../$o->image_main" class="cart_item_image">
      </div>

      <div class="cart-single-item-info col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <strong>$o->name</strong>
         <form action="product_actions.php?action=delete-cart-item" method="post">
            <input type="hidden" name="product-id" value="$o->id">
            <input type="submit" value="Delete" class="cart-single-item-btn-delete">
         </form>

         <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
            <input type="hidden" name="product-id" value="$o->id">
            <div class="cart-single-item-count form-select">
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



function makeAdminList($r,$o) {
return $r.<<<HTML
<div class="display-flex card flat soft">
   <div class="flex-none image-main">
      <img src="../$o->image_main" class="img_thumb">
   </div>
   <div class="flex-stretch" style="padding:1em">
      <div><strong>$o->name</strong></div>
      <div>$o->category</div>
   </div>
   <div class="flex-none">
      <div class="card-section"><a href="/aau/wnm608/lu.yuti/admin/?id=$o->id" class="form-button">Edit</a></div>
      <div class="card-section"><a href="/aau/wnm608/lu.yuti//styleguide/product_item.php?id=$o->id" class="form-button">View</a></div>
   </div>
</div>
HTML;
}





function makeRecommend($a) {
$products = array_reduce($a,'makeProductList');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}



function recommendSimilar($cat,$id=0,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat' AND
            `id` <> $id
         ORDER BY rand()
         LIMIT $limit
      ");
   makeRecommend($result);
}
function recommendCategory($cat,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat'
         ORDER BY `date_create` DESC
         LIMIT $limit
      ");
   makeRecommend($result);
}
