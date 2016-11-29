<?php

    //Accepts json data
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once "functions.php";

    //Connecting to the database
    $pdo = connectToDB();

    //Get posted data
    $data = file_get_contents("php://input");

    //Decoding the data
    $data = json_decode($data, true);
    $email = $data['email'];
    $password = $data['password'];

    //Fixing the strings
    $email = mysql_fix_string($email);
    $password = mysql_fix_string($password);

    //Hashing the password
    $password = md5($password);

    //Connecting to the database and executing SQL query
    $pdo = connectToDB();
    $query = "SELECT password FROM users WHERE email = ?";
    $statement = $pdo->prepare($query);
    $info = array($email);


    $logBool = false;
    if($statement->execute($info))
    {
        while ($row = $statement->fetch())
        {
            $retPass = $row['password'];

            if ($retPass == $password)
            {
                $logBool = true;
            }
        }

    }

/*
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "LogBool: $logBool";
*/

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