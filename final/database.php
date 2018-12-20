<?php 
function getDatabaseConnection(){
    if (strpos($_SERVER['SERVER_NAME'], "c9users") !== false){
        $host = "localhost";
        $username = "jfausto";
        $password = "Mexico1723$";
        $dbname = "meme_lab";
    } else {
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "b3b23bb818f627";
        $password = "4b2a2649";
        $dbname = "heroku_ab665a79aeb6c48";
    }
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn;
  }
?>
