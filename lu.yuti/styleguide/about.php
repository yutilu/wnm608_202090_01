<?php
include_once "../php/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <?php 
   include_once "../parts/meta.php"; 
   include_once "../php/function.php";
   include_once "../parts/templates.php";
   ?>
</head>
<body>
   
   <?php include "../parts/navbar.php"; ?>


   <div class="container">
   	<div class="grid gap">
         <div class="col-xs-12">
          <div class="card">
           <h2 class="product_list_title_h2">ABOUT US</h2>

            <p class="about-yum-text">Established in March 2020, Yum is the leading Asian American-centric Internet Company dedicated to providing Asian snacks to Asian Americans. With rapid growth, Yum is now the most popular shopping destination among the Chinese community in North America.</p>

		   <p class="about-yum-text">Headquartered in the Bay Area, California. We rapidly develop partnerships with marketplace vendors to bring forth a wider collection of products in snacks, soft drinks, and instant food. In addition to the many well-known and respected brands such as LOTTE, YUMEI, and ORION, we are continuously building stronger partnerships to strengthen our own and our partners’ brand name in North America.</p>

		   <p class="about-yum-text">Yum was founded by Jason Lee. While studying in Maryland, he experienced the inconvenience of driving one hour to reach the closest Asian market. This, led to the making of Yum as he set out to help Asian Americans in the states that are facing the same difficult situations. Yum targets to provide the most complete and up-to-date selection of Asian products alongside the best online shopping experience and outstanding customer service. We hope to provide Asian Americans homelike feel living in North America and allow Asian culture and traditions to be preserved and spread in this foreign land.</p>
           
           <img src="../img/yum_map.jpg" alt="yum map" class="yum-map">


           <p class="about-yum-subtitle">Our Address</p>
           <p class="about-yum-text">79 New Montgomery St, San Francisco, CA 94105</p>

		 </div>
		</div>
      </div>
   </div>


   <?php include "../parts/footer.php"; ?>
</body>
</html>