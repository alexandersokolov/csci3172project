<?php

    //Accepts json data
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once "dbConnect.php";
    include_once "utilities.php";

    //Get posted data
    $data = file_get_contents("php://input");

    //Decoding the data
    $data = json_decode($data, true);
    $email = $data['email'];
    $password = $data['password'];

    //Connecting to the database and executing SQL query
    $query = "SELECT password FROM users WHERE username = ?";
    $statement = $pdo->prepare($query);
    $info = array($email);


    $logBool = false;
    if($statement->execute($info))
    {
        while ($row = $statement->fetch())
        {
            $retPass = $row['password'];

            $logBool = verifyHash($password,$retPass);
        }

    }

    //Creates a JSON array based on if the passwords match or not
    if($logBool==true)
    {
        $arr = array('answer'=>'true');
    }
    if($logBool!=true)
    {
        $arr = array('answer'=>'false');
    }

    echo json_encode($arr);


?>