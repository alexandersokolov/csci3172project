<html lang="en">
<head>

    <!-- Title -->
    <title>Electronic Super Shop</title>


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
    include "include/shoppingModal.html"
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
            <li><a href="#">Ultrabooks</a></li>
            <li><a href="#">Chromebooks</a></li>
            <li><a href="#">Gaming Laptops</a></li>
            <li><a href="#">Convertible Laptops</a></li>
            <li><a href="#">Netbooks</a></li>
        </ul>
    </div>
</div>

<div class = "content-container">

    <img class="ui top aligned small image" src="media/laptop/laptop1.png">
    <a><h3>Acer Aspire</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label">$549.99 </a>
    </div>    
    <br>

    <div class="ui divider"></div>
    <img class="ui top aligned small image" src="media/laptop/laptop2.png">
    <a><h3>ThinkPad E59</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label" >$1530.99 </a>
    </div>    
    <br>

    <div class="ui divider"></div>
    <img class="ui top aligned small image" src="media/laptop/laptop3.png">
    <a><h3>HP Pavillion</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label">$749.99 </a>
    <br>
    </div>    
    <br>


    <div class="ui divider"></div>
    <img class="ui top aligned small image" src="media/laptop/laptop4.png">
    <a><h3>ASUS ROG</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label">$849.99 </a>
    <br>
    </div>    
    <br>

 
    <div class="ui divider"></div>
    <img class="ui top aligned small image" src="media/laptop/laptop5.png">
    <a><h3>Macbook Pro</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label">$1529.99 </a>
    <br>
    </div>    
    <br>


    <div class="ui divider"></div>
    <img class="ui top aligned small image" src="media/laptop/laptop6.png">
    <a><h3>Sony VIVO</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label">$960.99 </a>
    <br>
    </div>    
    <br>


    <div class="ui divider"></div>
    <img class="ui top aligned small image" src="media/laptop/laptop7.png">
    <a><h3>Toshiba</h3> <p>15.6" HD 1366 x 768 pixel resolution <br> 4GB DDR3L SDRAM <br> 500GB HDD, 2-in-1 card reader</p>
    <button class="ui button">Add to cart</button>
    </a>
    <div class="ui tag labels">
    <a class="ui label">$979.99 </a>
    <br>
    </div>  
    <br>  
    
</div>



</body>
</html>
