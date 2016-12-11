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

</head>
<body>



<!-- START OF NAVBAR MENU -->

<?php include "include/navBar.php"; ?>

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




<!-- jQuery -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Semantic UI jQuery -->
<script src="semantic/dist/semantic.min.js"></script>

<!-- Super Simple Slider -->
<script src="sss/sss.js"></script>

<!-- Semantic UI Javascript -->
<script src="js/semanticFuncionality.js"></script>


<!-- Super Simple Slider -->

<script>
    $(document).ready(function(){
        $('.slider').sss({
            slideShow : true, // Set to false to prevent SSS from automatically animating.startOn : 0, // Slide to display first. Uses array notation (0 = first slide).transition : 400, // Length (in milliseconds) of the fade transition.speed : 3500, // Slideshow speed in milliseconds.showNav : true // Set to false to hide navigation arrows.
        });
    });
</script>


</body>

<footer>
  <!-- Footer -->
  <?php
      include "include/footer.html"
  ?>
</footer>
</html>
