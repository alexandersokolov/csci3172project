<?php
  require 'include/accessControl.php';

  require_once 'include/dbConnect.php';
  require_once 'include/utilities.php';

  $username = 'jason';

  $sqlStatement = 'SELECT * FROM users WHERE username = :username';

  try{
    $s = $GLOBALS['pdo']->prepare($sqlStatement);
    $s->bindValue(':username', $username, PDO::PARAM_STR);
    $s->execute();

    $result = $s->fetch();

    if(count($result) > 1){
      $username = $result['username'];
      $password = $result['password'];
      $email = $result['email'];
      $firstName = $result['firstName'];
      $lastName = $result['lastName'];
      $addressOne = $result['addressOne'];
      $addressTwo = $result['addressTwo'];
      $province = $result['province'];
      $postCode = $result['postCode'];

    }

  }
  catch(PDOException $e){

  }

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

  <!-- js links -->
  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>

  <!-- semantic js -->
  <script src="semantic/dist/semantic.js"></script>
  <script src="js/registrationValidation.js"></script>
  <script src="js/mobileMenu.js"></script>

  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">


</head>

<body>

<!-- nav bar -->

  <?php include 'include/navBar.php'; ?>

<!-- end of nav bar -->

<!-- main content -->
  <div id="main_content">
    <?php
        include 'include/accountForm.php';
      ?>
  </div>

<!-- end main content -->

</body>

</html>
