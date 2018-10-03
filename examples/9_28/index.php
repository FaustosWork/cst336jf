<?php

echo "Favorite baby name: " . $_POST["babyNames[]"];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Name Generator</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <div>
                <input type="radio" name="babyNames" value=''/><input type="text" name="babyNames[]"/><br>
                <input type="radio" name="babyNames" value=''/><input type="text" name="babyNames[]"/><br>
                <input type="radio" name="babyNames" value=''/><input type="text" name="babyNames[]"/><br>
                <input type="radio" name="babyNames" value=''/><input type="text" name="babyNames[]"/><br>
                <input type="radio" name="babyNames" value=''/><input type="text" name="babyNames[]"/><br>
                
            </div>
            <div>
                <input type="submit" value="Submit Data"/>
            </div>
        </form>
    </body>
</html>