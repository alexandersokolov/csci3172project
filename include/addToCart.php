<?php
  session_start();

  include 'dbConnect.php';
  include 'utilities.php';

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $data = file_get_contents("php://input");

  if($data == "update"){
    updateCart();
  }
  else{

    $data = json_decode($data, true);

    $id = $data['id'];

    if(isset($_SESSION['cart'][$id])){
      $_SESSION['cart'][$id]['quantity']++;


    }
    else{
      $sql = 'SELECT * FROM products WHERE id = :id';
      //
      $id = mysql_fix_string($id);
      //
      try{
        $s = $GLOBALS['pdo']->prepare($sql);
        $s->bindValue(':id', $id, PDO::PARAM_INT);
        $s->execute();
        //
        $result = $s->fetch();

        $_SESSION['cart'][$result['id']] = array(
          'id' => $result['id'],
          'name' => $result['name'],
          'imagePath' => $result['imagePath'],
          'description' => $result['description'],
          'price' => $result['price'],
          'quantity' => 1
        );

      }
      catch(PDOException $e){
        echo "pdo error";
      }    //

    }

    updateCart();
  }


  function updateCart(){

    $jsonArray = array();
    $count = 0;


    foreach($_SESSION['cart'] as $id){

      $data = array('id'=>$id['id'], 'name'=>$id['name'], 'imagePath'=>$id['imagePath'], 'description'=>$id['description'], 'price'=>$id['price'], 'quantity'=> $id['quantity'] );
      $jsonArray[$count++] = $data;
    }

    echo json_encode($jsonArray);

  }



 ?>
