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

function makeCartList($r,$o) {
   return $r.<<<HTML
   <div class="display-flex">
      <div class="flex-none image-thumbs">
         <img src="/images/store/$o->image_thumb">
      </div>
      <div class="flex-stretch">
         <strong>$o->title</strong>
         <div>Delete</div>
      </div>
      <div class="flex-none">
         &dollar;$o->price
      </div>
   </div>
   HTML;
}