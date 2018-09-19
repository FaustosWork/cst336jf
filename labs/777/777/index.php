<?php
            
include 'inc/functions.php';
            
?>
<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <?php
        
        //     for ($i=1; $i<4; $i++){
        //         ${"randomValue" . $i} = rand(0,2);
        //         displaySymbol(${"randomValue" . $i});
        //     }
            
            
        //     for ($i=1; $i<4; $i++){
        //         ${"randomValue" . $i } = rand(1,1);
        //         displaySymbol(${"randomValue" . $i});
        //     }
        //     displayPoints($randomValue1, $randomValue2, $randomValue3);
        
        ?>        
        
        <div id="main">
            <?php
                play();
            ?>
        
            <form>
                <input type="submit" value="Spin!"/>
            </form>
        </div>
        
        
        
    </body>
</html>