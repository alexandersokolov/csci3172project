<html lang="en">
<head>

    <!-- Title -->
    <title>Electronic Super Shop</title>


    <!-- Semantic UI CSS -->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

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

<div class="ui grid">
    <div class="computer tablet only row">
        <div class="ui inverted fixed menu navbar page grid">
            <a href="" class="brand item">Awesome Store</a>
            <a href="" class="active item"><i class="home icon"></i>Home</a>
            <a class="ui dropdown item"><i class="shopping bag icon"></i>Products
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Laptops</div>
                    <div class="item">Televisions</div>
                    <div class="item">Mobile Phones</div>
                </div>
            </a>
            <div class="right menu">
                <a href="#" class="item login"><i class="sign in icon"></i>Login</a>
                <a href="#" class="item cart"><i class="shopping basket icon"></i>Cart</a>
            </div>
        </div>
    </div>
    <div class="mobile only row">
        <div class="ui fixed inverted navbar menu">
            <a href="" class="brand item">Awesome Store</a>
            <div class="right menu open">
                <a href="" class="menu item">
                    <i class="content icon"></i>
                </a>
            </div>
        </div>
        <div class="ui vertical navbar menu">
            <a href="" class="active item">Home</a>
            <div class="ui item">
                <div class="text">Products</div>
                <div class="menu">
                    <a class="item">Laptops</a>
                    <a class="item">Televisions</a>
                    <a class="item">Mobile Phones</a>
                </div>
            </div>
            <div class="menu">
                <a href="#" class="item login">Login</a>
                <a href="#" class="item cart">Cart</a>
            </div>


        </div>
    </div>
</div>

<!-- END OF NAVBAR -->

<!-- Carousel -->
<div class="slider">
    <img src="media/1.jpg" /><img src="media/2.jpg" /><img src="media/3.jpg" />
</div>


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


</body>
</html>