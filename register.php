<?php

  //php section called when form is submitted.  User information is gathered from fields
  //then sanitized and password hashed.  then inserted into the db
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'include/dbConnect.php';
    require 'include/utilities.php';

    $username = "";
    $password = "";
    $email = "";
    $firstName = "";
    $lastName = "";
    $addressOne = "";
    $addressTwo = "";
    $province = "";
    $postCode = "";


    //Prepared sql statement for inserting new users into the database
    $sqlStatement = 'INSERT INTO users (username, password, email, firstName, lastName, addressOne, addressTwo, province, postCode) VALUES (
      :username,
      :password,
      :email,
      :firstName,
      :lastName,
      :addressOne,
      :addressTwo,
      :province,
      :postCode);';

    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['addressOne']) && !empty($_POST['province']) && !empty($_POST['postCode'])){

      $username = mysql_fix_string($_POST['username']);
      $password = mysql_fix_string($_POST['password']);
      $email = mysql_fix_string($_POST['email']);
      $firstName = mysql_fix_string($_POST['firstName']);
      $lastName = mysql_fix_string($_POST['lastName']);
      $addressOne = mysql_fix_string($_POST['addressOne']);
      $addressTwo = mysql_fix_string($_POST['addressTwo']);
      $province = mysql_fix_string($_POST['province']);
      $postCode = mysql_fix_string($_POST['postCode']);

      $password = hashPass($password);

      try{
        //begin preparing and binding the sql statement
        $s = $GLOBALS['pdo']->prepare($sqlStatement);
        $s->bindValue(':username', $username, PDO::PARAM_STR);
        $s->bindValue(':password', $password, PDO::PARAM_STR);
        $s->bindValue(':email', $email, PDO::PARAM_STR);
        $s->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $s->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $s->bindValue(':addressOne', $addressOne, PDO::PARAM_STR);
        $s->bindValue(':addressTwo', $addressTwo, PDO::PARAM_STR);
        $s->bindValue(':province', $province, PDO::PARAM_STR);
        $s->bindValue(':postCode', $postCode, PDO::PARAM_STR);


        //execute the sql statement
        $s->execute();
        $s = null;

        //close the db connection
        closeDbConnection();

        //navigate to registration success page
        header('Location: index.php');

      }
      catch(PDOException $e){
        closeDbConnection();
        echo "Error - Could not register user!";

      }


    }
    else{
      echo "Error - Could not register user!";
    }
  }
  else{
    echo "continue";
  }
?>

<!-- End of PHP -->

<!-- Beginning of HTML -->

<html lang="en">
<head>
  <title>ESS - User Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <?php include 'include/navBar.php'; ?>

<!-- end of nav bar -->

<!-- main content -->
  <div id="main_content">
    <?php include 'include/registerForm.php'; ?>
  </div>

<!-- end main content -->

</body>

</html>
