<!DOCTYPE html>
<html>

<head>
    <title> RPS </title>
    <style type="text/css">
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            text-align: center;
            margin: 0 70px;
        }

        .matchWinner {
            background-color: yellow;
            margin: 0 70px;
        }

        #finalWinner {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }
        
        hr {
            width:33%;
        }
        div
        {
            display: inline-block;
        }
    </style>
</head>

<body>

    <h1> Rock, Paper, Scissors </h1>

    <div class="row">
        <div class="col">
            <h2>Player 1</h2>
        </div>
        <div class="col">
            <h2>Player 2</h2>
        </div>
    </div>
    <?php
    
        $paper = rand(0,3);
        $rock = rand(0,3);
        $scissors = rand(0,3);
    ?>
    <div class="row">
        <div class='col'><img src='rps/paper.png' alt='scissors' width='150'></div>
        <div class='col, matchWinner'><img src='rps/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>

    <div class="row">
        <div class='col'><img src='rps/2.png' alt='rock' width='150'></div>
        <div class='col, matchWinner'><img src='rps/1.png' alt='paper' width='150'></div>
    </div>
    <hr>
    
    <div class="row">
        <div class='col, matchWinner'><img src='rps/1.png' alt='paper' width='150'></div>
        <div class='col'><img src='rps/2.png' alt='rock' width='150'></div>
    </div>
    <hr>
    
    <div id="finalWinner">

        <h1>The winner is Player 2</h1>

    </div>
    Images source: https://www.kisspng.com/png-rockpaperscissors-game-money-4410819/
</body>

</html>
