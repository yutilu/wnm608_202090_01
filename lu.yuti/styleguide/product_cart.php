<?php


include_once "../php/function.php";
include_once "../parts/templates.php";

$cart = getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>

   <?php include "../parts/meta.php" ?>
</head>
<body>
   
   <?php include "../parts/navbar.php" ?>


   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12">
            <div class="card">
               <h2>Product Cart</h2>

               <?

               echo array_reduce($cart,'makeCartList');

               ?>

            </div>
         </div>
         <div class="col-xs-12">
            <div class="card">
               <?= cartTotals() ?>
            </div>
         </div>
      </div>
   </div>

<?php include "../parts/footer.php"; ?>
</body>
</html>