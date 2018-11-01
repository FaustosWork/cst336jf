<?php
include 'database.php';

$connect = getDatabaseConnection();

$sql = "SELECT * FROM `q_quotes` order by rand() limit 1";
$stmt = $connect->prepare($sql);
$stmt->execute();
$quote = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Quote Generator</title>
        <style>
            body {
                background: #CCCCCC;
            }
        </style>
    </head>
    <body>
        
        <h1>Quote Generator</h1>
    
        <h2> <?php echo $quote[quote]; ?></h1>
        <h3><i> <?php echo $quote[author]; ?> </i></h3>

        <a href="create.php">Create</a>
    </body>
</html>