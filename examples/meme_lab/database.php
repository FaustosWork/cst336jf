<?php 
function getDatabaseConnection(){
    $host = "localhost";
    $username = "jfausto";
    $password = "Mexico1723$";
    $dbname = "meme_lab";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn;
  }
?>

