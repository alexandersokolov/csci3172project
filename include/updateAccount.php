<?php

  include 'dbConnect.php';
  include 'utilities.php';

  $sqlStatement = 'INSERT INTO creditcards (number, username, firstName, lastName, type, expMonth, expYear, csv) VALUES (123456790123456, "jason", "jason", "turner", "MC", "06", "89", "123")';

  $s = $GLOBALS['pdo']->prepare($sqlStatement);
  $s->execute();


 ?>
