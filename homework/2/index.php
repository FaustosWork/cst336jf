<?php

include 'inc/functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nacho Libre Soundboard</title>
        <meta charset="utf-8">
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    
    <body>
        <header>
            <h1>Nacho Libre Soundboard</h1>
        </header>
        
        <div id="NACHO">
            
            <?php
                play();
            ?>
            
            <form>
                <input id = "button" type="submit" value ="Another one?"/>
            </form>
        </div>
        
    </body>
    
</html>