<?php
include_once "../php/function.php";
include_once "../parts/templates.php";

setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');

function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Least Expensive"]
   ];
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $title
      </option>
      ";
   }
}


function makeHiddenValues($options) {
   foreach(array_merge($_GET,$options) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>";
   }
}


if(isset($_GET['t'])) {
   include_once "../data/api.php";
//    $filename = "data/api.php?".http_build_query($_GET);

// echo $filename;
   // $result = file_get_json($filename);

   $result = makeStatement($_GET['t']);

   $products = isset($result['error']) ? [] : $result;

   // print_p($result);
   // die;

}

?>

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
         <div class="flex-center display-flex">
            <form action="product_list.php" method="get" class="hotdog stack">
               <input type="search" name="s" placeholder="Search for a product"
               value="<?= @$_GET['s'] ?>">

               <input type="hidden" name="orderby" value="<?=$_GET['orderby']?>">
               <input type="hidden" name="orderby_direction" value="<?=$_GET['orderby_direction']?>">
               <input type="hidden" name="limit" value="<?=$_GET['limit']?>">

               <input type="hidden" name="t" value="search">
               <button type="submit">Search</button>
            </form>
         </div>

      <div class="display-flex" style="margin:1em 0">
         <div class="flex-none display-flex">
            <form action="product_list.php" method="get">
               <input type="hidden" name="category" value="snack">
               <input type="hidden" name="t" value="products_by_category">
               <input type="hidden" name="limit" value="<?=$_GET['limit']?>">
               <input type="hidden" name="orderby" value="<?=$_GET['orderby']?>">
               <input type="hidden" name="orderby_direction" value="<?=$_GET['orderby_direction']?>">
            </form>
         </div>
         <!-- <div class="flex-stretch"></div> -->
         <div class="flex-none">
            
            <form action="product_list.php" method="get">
               <input type="hidden" name="s" value="<?=$_GET['s']?>">
               <input type="hidden" name="t" value="<?=$_GET['t']?>">
               <input type="hidden" name="limit" value="<?=$_GET['limit']?>">
               <input type="hidden" name="orderby">
               <input type="hidden" name="orderby_direction">

               <div class="form-select">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>
            </form>
         </div>
      </div>
         
         <h2 class="product_list_title_h2">PRODUCT LIST</h2>
         <div class="form-control">
            <div class="product-list grid gap">
                
               <?php

                  echo array_reduce(
                  $products,
                  'makeProductList'
                     );

               ?>
            </div>
         </div>
      </div>
   </div>
   <script src="../js/products.js"></script>
   <?php include "../parts/footer.php"; ?>
</body>
</html>