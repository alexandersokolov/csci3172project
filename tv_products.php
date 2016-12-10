<?php
  session_start();
 ?>


<html lang="en">
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
      <script src="js/populateShop.js"></script>
  </head>
  <body>
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
        include "include/shoppingModal.php"
    ?>

    <!-- Footer -->
    <?php
        include "include/footer.html"
    ?>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Semantic UI jQuery -->
    <script src="semantic/dist/semantic.min.js"></script>

    <!-- Super Simple Slider -->
    <script src="sss/sss.js"></script>

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
    <!-- jQuery that enables semantic UI login modal -->

    <script>
        //Function that makes the login modal show-up
        $(".login").click(function()
        {
            $('.ui.modal.login')
                .modal('show')
            ;
        });
    </script>

    <!-- enables shopping cart modal -->
    <script>
        //Function that makes the login modal show-up
        $(".cart").click(function()
        {
            $('.ui.modal.cart')
                .modal('show')
            ;
        });
    </script>

    <!-- Super Simple Slider -->
    <script>
        $(document).ready(function(){
            $('.slider').sss({
                slideShow : true, // Set to false to prevent SSS from automatically animating.startOn : 0, // Slide to display first. Uses array notation (0 = first slide).transition : 400, // Length (in milliseconds) of the fade transition.speed : 3500, // Slideshow speed in milliseconds.showNav : true // Set to false to hide navigation arrows.
            });
        });
    </script>

    <div class = "category-container">
        <div class="category-list">
            <h2>Category</h2>
            <ul class="category-product">
                <li><a href="#">LCD</a></li>
                <li><a href="#">LED</a></li>
                <li><a href="#">Plasma</a></li>
            </ul>
        </div>
    </div>

    <div class = "content-container" >
        <img class="ui top aligned small image" src="media/TVs/tv1.png">
        <a><h3>Toshiba</h3> <p> 32" 720p LED TV (32L220U)</p>
          <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label">$169.99 </a>
        </div>
        <br>

        <div class="ui divider"></div>
        <img class="ui top aligned small image" src="media/TVs/tv2.png">
          <a><h3>Samsung</h3> <p> Full Hd Smaert Led Tv </p>
        <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label" >$598.00 </a>
        </div>
        <br>

        <div class="ui divider"></div>
        <img class="ui top aligned small image" src="media/TVs/tv3.png">
          <a><h3>Sony XBR65X750D</h3> <p>65" 4K UHD LED HDR</p>
        <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label">$1,699.99 </a>
        <br>
        </div>
        <br>


        <div class="ui divider"></div>
        <img class="ui top aligned small image" src="media/TVs/tv4.png">
          <a><h3>Westinghouse</h3> <p>23" Hd Smart Tv</p>
        <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label">$238.00 </a>
        <br>
        </div>
        <br>


        <div class="ui divider"></div>
        <img class="ui top aligned small image" src="media/TVs/tv5.png">
          <a><h3>Proscan</h3> <p>23" Led Hd Tv</p>
        <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label">$128.00 </a>
        <br>
        </div>
        <br>


        <div class="ui divider"></div>
        <img class="ui top aligned small image" src="media/TVs/tv6.png">
          <a><h3>Rca</h3> <p>50" Direct Led Hd Tv</p>
        <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label">$448.00</a>
        <br>
        </div>
        <br>


        <div class="ui divider"></div>
        <img class="ui top aligned small image" src="media/TVs/tv7.png">
          <a><h3>Tygerclaw</h3> <p>108" Inch Projector screen</p>
        <button class="ui button">Add to cart</button>
        </a>
        <div class="ui tag labels">
          <a class="ui label">$209.98 </a>
        <br>
        </div>
        <br>
    </div>
  </body>
</html>
