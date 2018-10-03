<?php
            
function displaySymbol($randomValue)
{
                if ($randomValue == 0) {
                    echo '<img src="img/scene1.jpg" alt="life" title="Life" />';
                } else if ($randomValue == 1) {
                    echo '<img src="img/scene2.jpg" alt="toast" title="Toast" />';
                } else if ($randomValue == 2){
                    echo '<img src="img/scene3.jpg" alt="corn" title="Corn" />';
                } else {
                    echo '<img src="img/scene4.jpg" alt="win" title="Win" />';
                }
}

function displaySound($randomValue) 
{
                
                echo "<div id='output'>";
                //if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
                    switch ($randomValue) {
                        case 0: $scene = 'source src="audio/my_life_is_good.mp3" type="audio/mpeg';
                                echo "<h1>My Life is Good ... Really Good!</h1>";
                                break;

                        case 1: $totalPoints ='source src="audio/toast.mp3" type="audio/mpeg';
                                echo "<h2>Would you like to join me in my quarters for some toast?</h2>";
                                break;
                        case 2: $totalPoints = 'source src="audio/corn.mp3" type="audio/mpeg';
                                echo "<h3>Get that corn out of my face!</h3>";
                                break;
                        case 3: $totalPoints = 'source src="audio/win.mp3" type="audio/mpeg';
                                echo "<h4>I wanna win!!</h4>";
                                break;
                    }
                    
                    //echo "<h2>You won $totalPoints points!</h2>";
              //  } else {
              //      echo "<h3>Try again! </h3>";
            //    }
                echo "</div>";
}

function play() 
{
                for ($i=1; $i<4; $i++){
                    ${"randomValue" . $i } = rand(0,3);
                    displaySymbol(${"randomValue" . $i}, $i);
                }
                displaySound($randomValue);
}

?>