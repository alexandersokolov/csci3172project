<?php
  include_once "dbConnect.php";
  include_once "utilities.php";

  session_start();


 $username = isset($_POST['username']) ? $_POST['username'] : $_SESSION['username'];
 $password = isset($_POST['password']) ? hashPass($_POST['password']) : $_SESSION['password'];

  // $username = $_SESSION['username'];
  // $password = $_SESSION['password'];

  // echo "printing..." . "<br>";
  // echo $username . "<br>";
  // echo $password . "<br>";

  if(!isset($username) || empty($username)){
    header("Location: login.php");
  }

  $username = mysql_fix_string($username);
  $password = mysql_fix_string($password);

  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

  $sqlStatement = 'SELECT * FROM users WHERE username = :username';

  try{
    $s = $GLOBALS['pdo']->prepare($sqlStatement);
    $s->bindValue(':username', $username, PDO::PARAM_STR);
    $s->execute();

    $result = $s->fetch();

    if(count($result) > 1){

      if($username != $result[0] && !verifyHash($password, $result[1])){
        header("Location: login.php");
      }


    }
    else{
      header("Location: login.php");

    }

  }
  catch(PDOException $e){

  }

  closeDbConnection();


?>
