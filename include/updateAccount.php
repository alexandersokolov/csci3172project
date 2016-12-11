<?php

  include 'dbConnect.php';
  include 'utilities.php';

  session_start();

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $data = file_get_contents("php://input");
  $data = json_decode($data, true);

  $sqlStatement = "";

  try{

    $pdo = "";

    if($data['id'] == "updateInfo"){
      $pass = $data['password'];
      $email = $email['email'];


      if(!empty($pass)){
        $pass = hashPass($pass);

        $sqlStatement = 'INSERT INTO users (password, email) VALUES (:password, :email) WHERE username = ' . $_SESSION['username'];

      }
      else{
        $sqlStatement = 'INSERT INTO users (email) VALUES (:email) WHERE username = ' . $_SESSION['username'];

      }

      $s = $GLOBALS['pdo']->prepare($sqlStatement);

      if(!empty($pass)){
        $s->bindValue(':password', $password, PDO::PARAM_STR);
      }

      $s->bindValue(':email', $email, PDO::PARAM_STR);

      $s->execute();

    }
    else if($data['updateAddress']){

      // $sqlStatement = 'INSERT INTO users (firstName, lastName, addressOne, addressTwo, province, postCode) VALUES (
      //   :firstName,
      //   :lastName,
      //   :addressOne,
      //   :addressTwo,
      //   :province,
      //   :postCode) WHERE username = ' . $_SESSION['username'];
      //
      //
      // $firstName = $data['firstName'];
      // $lastName = $data['lastName'];
      // $addressOne = $data['addressOne'];
      // $addressTwo = $data['addressTwo'];
      // $province = $data['province'];
      // $postCode = $data['postCode'];



    }
  }



  // $sqlStatement = 'INSERT INTO creditcards (number, username, firstName, lastName, type, expMonth, expYear, csv) VALUES (123456790123456, "jason", "jason", "turner", "MC", "06", "89", "123")';



  try{

    $s = $GLOBALS['pdo']->prepare($sqlStatement);
    $s->execute();
  }
  catch(PDOException $e){

  }



 ?>
