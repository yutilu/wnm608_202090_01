<header class="navbar">
   <div class="container display-flex flex-align-center">
      <div class="flex-none">
         <img src="../img/yumlogo.png" alt="nav logo" class="nav_logo">
      </div>
      <div class="flex-stretch"></div>
      
      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">
         <ul class="display-flex">
            <li><a href="./index.php">HOME</a></li>
            <li><a href="./product_list.php">SNACKS</a></li>
            <li><a href="./product_cart.php">
               <span>CART</span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
         </ul>
      </nav>
   </div>
</header>