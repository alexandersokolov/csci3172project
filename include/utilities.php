<?php
  //sanitate the user input from malicious code
  //help from http://www.w3schools.com/php/php_form_validation.asp
  function mysql_fix_string($input){
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES);

    return $input;
  }

  //hash the password given by the user and return the hashed version
  function hashPass($password){
    $hash = password_hash($password, PASSWORD_BCRYPT);

    if(!$hash){
      echo "error creating password hash!";
      exit();
    }

    return $hash;
  }

  //function verifies the password given against the hashed password
  function verifyHash($password, $hashedPass){
    $verify = password_verify($password, $hashedPass);

    return $verify;
  }

  //close the db connection
  function closeDbConnection(){
    $GLOBALS['pdo'] = null;
  }
?>
