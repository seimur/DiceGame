<?php
if(isset($_POST['logout'])) {
    session_start();
    session_destroy();
    $_SESSION = null;
    header("location: login.php");
}
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<html>
<head>
    <title>Dice Game</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        <h1>Start your dice GAME!</h1>
        </div>
        <div class="col">
            <form action="" method="POST">
                <button name="logout" class="btn btn-secondary mt-2">Logout</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div id="firstDice"></div>
            <div id="secondDice"></div>
            <div id="thirdDice"></div>
            <div><h3 id="result">Your Result:</h3></div>
            <div><h3 id="win"></h3></div>
            <div><h3 id="totalWin"></h3></div>
            <div><h1 id="gameOver"></h1></div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <button id="startGame" value="startGame" onclick="Game()" class="btn btn-secondary sm">Start Game</button>
            <button id="rollDice" class="btn btn-secondary sm">Role the Dice!</button>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
        <button id="stats" class="btn btn-secondary sm" onclick="location.href='stats.php'">My Stats</button>
        </div>
    </div>
</div>





<script src="script.js"></script>
</body>
</html>
