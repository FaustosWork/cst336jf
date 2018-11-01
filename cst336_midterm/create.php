<?php
include 'database.php';

function createQuote($quoteId, $quote, $author) {
    
    $dbConn = getDatabaseConnection(); 

    $sql = "INSERT INTO `q_quotes` (`quoteId`, `quote`, `author`, `num_likes`) VALUES (NULL, '$quoteId', '$quote', '$author', '$num_likes', NOW());"; 
    
    $statement = $dbConn->prepare($sql); 
    $result = $statement->execute(); 
    
    if (!$result) {
      return null; 
    }
    
    $last_id = $dbConn->lastInsertId();
    
    $sql = "SELECT * from q_quotes WHERE id = $last_id"; 
    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    $newQuote = $records[0]; 
    
    return $newQuote; 
    
}

function displayQuote() {
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from q_quotes WHERE 1";  
    
    echo "POST: "; 
    print_r($_POST);
    echo "<br/>"; 
    
    echo "sql: $sql <br/>"; 

    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    foreach ($records as $record) {
       $quoteId = $record['quoteId']; 
       echo  '<h2 class="quote">' . $record["quote"] . '</h2>'; 
       echo  '<h2 class="author">' . $record["author"] . '</h2>'; 
       echo  '</div>'; 
    }
} 


if (isset($_POST['quote']) && isset($_POST['author'])) {
  $quoteObj = createQuote($_POST['quote'], $_POST['author']); 
}


function getErrors() {
    $errors = array(); 
    
    if ($_POST['text'] == "input") {
        echo "Text must not be empty"; 
    } 
    
    if (!isset($_POST['author'])) {
        echo "Author must not be empty"; 
    } 
    
    return $errors; 
}

function displayErrors($errors) {
    echo "<ul>"; 
    foreach ($errors as $error) {
        echo "<li>$error</li>"; 
    }
    echo "</ul>"; 
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
    <style>
    
      body {
          background: #CCCCCC;
      }
      
    </style>
  </head>
  <body>
    <?php if ($quoteObj) {  ?>
      <h1>Create a new quote: </h1>

      <div class="quote-div">
        <h2 class="quote"> <?=  $quoteObj['quote'] ?> </h2>
        <h2 class="author"> <?=  $quoteObj['author'] ?> </h2>
      </div>
    <?php } ?>
    
    <h1>Create a new quote:</h1>
    <form method="post" action="cst336_midterm.php">
        Text:  <input type="text" name="text"></input> 
        Author: <input type="text" name="author"></input>
        <br/>

        <input type="submit"></input>
    </form>
    
    <?php 
        
            if(isset($_POST['submit'])) {
                $errors = getErrors(); 
                
                if (count($errors) > 0) {
                    displayErrors($errors); 
                }
            }
            
    ?>
    
  </body>
</html>