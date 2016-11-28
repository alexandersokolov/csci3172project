<?php

//Function that connects to the database
function connectToDB()
{
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
        //Configuring PDO to catch error exceptions
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');

        return $pdo;
    }


    catch (PDOException $e)
    {
        exit();
    }

}

//Fix string function
//This function needs to be fixed, mysql_real_escape_string($variable) function
//is deprecated and returns an error on certain servers
function mysql_fix_string($string)
{
 //  if(get_magic_quotes_gpc()) $string = stripslashes($string);
  // return mysql_real_escape_string($string);
    return $string;
}

?>