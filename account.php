<?php
  require 'include/accessControl.php';
 ?>

<!-- Beginning of HTML -->

<html lang="en">
<head>
  <title>ESS - User Registration</title>

  <!-- Semantic UI CSS -->
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.css">

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="description" content="Web Centric Project">
  <meta name="keywords" content="Web,Centric,Project">
  <meta name="author" content="Team Squad">



  <!-- Stylesheet Link -->
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

  <!-- js links -->
  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>

  <!-- semantic js -->
  <script src="semantic/dist/semantic.js"></script>
  <script src="js/registrationValidation.js"></script>
  <script src="js/mobileMenu.js"></script>

</head>

<body>

<!-- nav bar -->

  <?php include("include/navBar.php"); ?>

<!-- end of nav bar -->

<!-- main content -->
  <div id="main_content">
    <h1> account home </h1>
    <?php
      echo "stuff";
      echo $_SESSION['username'];
      echo $_SESSION['password'];
      ?>
  </div>

<!-- end main content -->

</body>

</html>
