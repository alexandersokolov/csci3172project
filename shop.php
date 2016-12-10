<?php

  $page = 0;
  if(isset($_GET['id'])){
    $page = $_GET['id'];
  }

 ?>

<html>
<head>

    <!-- Title -->
    <title>Electronic Super Shop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Semantic UI CSS -->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

    <link href="css/style.css" rel="stylesheet" media="screen">

    <!-- Super Simple Slider CSS -->
    <link rel="stylesheet" type="text/css" href="sss/sss.css">

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Web Centric Project">
    <meta name="keywords" content="Web,Centric,Project">
    <meta name="author" content="Team Squad">


    <!-- Stylesheet Link -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>


    <script src="semantic/dist/semantic.min.js"></script>
    <script src="js/shopPopulate.js"></script>
    <script src="js/shoppingCart.js"></script>
    <script src="js/semanticFuncionality.js"></script>





</head>
<body onload=<?php echo '"addAllProducts(' . $page . ');"' ?>>


  <!-- START OF NAVBAR MENU -->

  <?php
      include("include/navBar.php");
  ?>

  <!-- END OF NAVBAR -->

  <!-- Login Modal -->
  <?php
      include "include/loginModal.html"
  ?>

  <!-- Shopping Cart Modal -->
  <?php
      include "include/shoppingModal.html"
  ?>

  <div class = "category-container" style="margin-top: 5%;">
      <div class="category-list">
          <h2>Category</h2>
          <ul class="category-product">
              <li><a href="#">Ultrabooks</a></li>
              <li><a href="#">Chromebooks</a></li>
              <li><a href="#">Gaming Laptops</a></li>
              <li><a href="#">Convertible Laptops</a></li>
              <li><a href="#">Netbooks</a></li>
          </ul>
      </div>
  </div>

  <div class = "content-container" id="shop_content" style="margin-top: 5%; ">

  </div>

</body>



</html>

<!-- jQuery that allows semantic ui javascript -->
<script>
    $(document).ready(function(){
        $('.right.menu.open').on("click",function(e){
            e.preventDefault();
            $('.ui.vertical.menu').toggle();
        });

        $('.ui.dropdown').dropdown();
    });

</script>
