<?php
  //$host = "db.cs.dal.ca";
  $host = localhost;
  $dbName = "csci3172project";
  $userName = "project";
  $password = "project";

  try{

    //login to the database
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbName, $userName, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

  }
  catch(PDOException $e){
    echo "Error - Unable to connect to database!";

    exit();
  }


?>
