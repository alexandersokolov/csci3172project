<?php
  session_start();

  include 'dbConnect.php';
  include 'utilities.php';

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $data = file_get_contents("php://input");
  $data = json_decode($data, true);

  $id = $data['id'];

  if(isset($_SESSION['cart'][$id])){

    $_SESSION['cart'][$id]['quantity']++;
  }
  else{

    $sql = 'SELECT * FROM products WHERE id = :id';

    $id = mysql_fix_string($id);

    $s = $GLOBALS['pdo']->prepare($sqlStatement);
    $s->bindValue(':id', $id, PDO::PARAM_INT);
    $s->execute();

    $result = $s->fetch();

    echo $result['name'];

    /*$_SESSION['cart'][$result['id']] = array(

      'name' => $result['name'],
      'price' => $result['price'],
      'quantity' => $result['quantity']
    );*/

  }



 ?>
