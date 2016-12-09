<?php

header("Content-Type: application/json; charset=UTF-8");

include_once "dbConnect.php";
include_once "utilities.php";

//Get posted data
$data = file_get_contents("php://input");

//Decoding the data
$data = json_decode($data, true);
$id = $data['id'];
$username = $data['username'];
$rating = $data['rating'];
$text = $data['text'];
$date = $data['date'];

//Sanitizing the data
$username = mysql_fix_string($username);
$rating = mysql_fix_string($rating);
$text = mysql_fix_string($text);
$data = mysql_fix_string($date);

echo "$id $username $rating $text $date";


//Connecting to the database and executing SQL query
$query = "INSERT INTO comments VALUES (?,?,?,?,?)";
$statement = $pdo->prepare($query);
$statement->execute(array($id,$username,$date,$text,$rating));





?>