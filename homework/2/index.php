<!DOCTYPE html>

<html>
    <head>
        
        <meta charset = "utf-8"/>
        <title>Random Shoe Generator</title>
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    
    <body background="img/minimalist.jpg">
        
        <header>
            
            <h1>What Shoe Should I Wear Today?</h1>
            
        </header>
        <br >
        <div>
            <h2>My shoes are as followed: </h2>
            <?php
                    $shoes = array("Jordan 1 Rookie of the Year", "Jordan 1 PSG", "Jordan 9 Bred", "Jordan Future", "Nike Air Force 1", "Vans Old Skool", "Adidas Ultraboost 3.0");
                    
                    sort($shoes);
                    
                    for ($i = 0; $i < count($shoes); $i++) 
                    {
                        echo $shoes[$i]."<br >";
                    }
                    
                    echo "<h2> These are the company emblems: <br ></h2>";
                    
                    $emblems = array("img/logo1.jpg", "img/logo2.jpg", "img/logo3.jpg", "img/logo4.jpg");
                    
                    if(is_array($emblems))
                    {
                        for ($i = 0; $i < count($emblems); $i++) 
                        {
                            echo "<img class = 'emblem' src = ".$emblems[$i]." /> ";
                        }
                    }
            ?>
            <h3>Images are shown at random.</h3>
        </div>
        
        <hr>
        <main>
            
            <?php
            
                    $option = rand(1,7);
                    
                    switch($option)
                    {
                        case 1: echo "<img class = 'shoes' src = 'img/shoe1.jpg'/>";
                                break;
                        case 2: echo "<img class = 'shoes' src = 'img/shoe2.jpg'/>";
                                break;
                        case 3: echo "<img class = 'shoes' src = 'img/shoe3.jpg'/>";
                                break;
                        case 4: echo "<img class = 'shoes' src = 'img/shoe4.jpg'/>";
                                break;
                        case 5: echo "<img class = 'shoes' src = 'img/shoe5.jpg'/>";
                                break;
                        case 6: echo "<img class = 'shoes' src = 'img/shoe6.jpg'/>";
                                break;
                        case 7: echo "<img class = 'shoes' src = 'img/shoe7.jpg'/>";
                                break;
                    }
            
            ?>
        <hr>
           
            <form>
                <input id = "button" type="submit" value ="Retry"/>
            </form>
            
        </main>
        
    </body>
    
</html>