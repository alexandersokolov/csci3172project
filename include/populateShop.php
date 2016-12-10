<?php
  session_start();

  include 'dbConnect.php';
  include 'utilities.php';

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $data = file_get_contents("php://input");
  $data = json_decode($data, true);


  $type = mysql_fix_string($data['type']);


  $sqlStatement = 'SELECT * FROM products WHERE type = :type';

  try{
    $s = $GLOBALS['pdo']->prepare($sqlStatement);
    $s->bindValue(':type', $type, PDO::PARAM_INT);
    $s->execute();

    //$results = $s->fetch();
    //echo count($results);

    $count = 0;
    $jsonArray = array();

    while($result = $s->fetch()){

      $data = array('id'=>$result['id'], 'name'=>$result['name'], 'imagePath'=>$result['imagePath'], 'description'=>$result['description'], 'price'=>$result['price'], 'quantity'=>$result['quantity'], 'available'=>$result['available'], 'type'=>$result['type']);

      $jsonArray[$count] = $data;
      $count = $count + 1;
    }

    echo json_encode($jsonArray);
  }
  catch(PDOException $e){
    echo "";
  }



 ?>
