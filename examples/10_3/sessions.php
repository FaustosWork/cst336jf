<?php

session_start();

if(isset($_POST['destroy'])){
    session_destroy();
    session_start();
}

if(!isset($_SESSION['randomVal'])){
    $_SESSION['randomVal'] = rand(1,100);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <header>
            <h1>Guess the number (between 1 and 100)</h1>
        </header>
        
        
        <?php
            echo $_SESSION['randomVal'];
        ?>
        
        <form method="post">
            <div>
                <input type="text" name="guess"/><br>
                
            </div>
            <div>
                <input type="submit" value="Submit"/>
            </div>
        </form>
    </body>
</html>