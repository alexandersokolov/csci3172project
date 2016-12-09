<html lang="en">
<head>

    <!-- Title -->
    <title>Electronic Super Shop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <link href="css/style.css" rel="stylesheet" media="screen">




<div class="gmap map" id="map" data-center="Brugse Heirweg 37 Aartrijke Belgium" data-zoom="15">
    <address>
      <div><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d45424.86007470863!2d-63.5965883!3d44.6368183!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1480547877510" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </address>
</div><!--End map-->


<div class="address">
    <h3>Address:</h3>
    <i class="home icon"></i>
    <div class="contact-address">
        B block, 1no. road
        Halifax, NS,
        Canada.
    </div>


    <h3>Phone:</h3>
    <div class="phone">
        <i class="icon-print"></i>
            <i class="text telephone icon"></i>
            <div class="contact-address">
                +1 800 119 6590
            </div>
    </div>
    <br>
    <h3>Email:</h3>
    <div class="email">
        <i class="icon-print"></i>
            <i class="mail icon"></i>
            <div class="contact-address">
                awesome@shop.com
            </div>
    </div>
</div><!--End address-->

<div class="contact-txt">
    <h3>Company Information:</h3><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>
        <br>
        <div class="ui divider"></div>
    <h3>Our History:</h3><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>

</div>



</head>
<body>




<!-- START OF NAVBAR MENU -->

<?php include("include/navBar.php"); ?>

<!-- END OF NAVBAR -->




<!-- Login Modal -->
<?php
    include "include/loginModal.html"
?>



<!-- Shopping Cart Modal -->
<?php
    include "include/shoppingModal.php"
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
