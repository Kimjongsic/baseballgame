<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h1> <span>Base</span><span>ball</span><span>Game</span> </h1>
    </div>
    <div class="start">
        <div class="btnwrap">
            <div class="startbtn">
                <a href="numberProduce.php">stat</a>
            </div>
            <div class="starttext">
                <span> <?php print_r($_SESSION['text']); ?> </span>
            </div>
            <div class="resetbtn">
                <a href="reset.php">reset</a>
            </div>
        </div>
    </div>
    <form action="" method="post" class="formwrap">
        <div class="inputbar">
            <input type="text" name="unum" id="unum" class="numbar" minlength="3" maxlength="3">
        </div>
        <input type="submit" value="Check" class="confbtn">
    </form>
    <?php include "numberConfirm.php"; ?>    
    <div class="score">
        <div class="circle-wrap">
            <div class="time">
                <?php 
                    echo $_SESSION['gametime'];
                    $_SESSION['gametime']++;    
                ?> 회
            </div>
            <div class="score-wrap">
                <span class="score-name">S</span>
                <div id="1-strike" class="score-circle"></div>
                <div id="2-strike" class="score-circle"></div>
                <div id="3-strike" class="score-circle"></div>
            </div>
            <div class="score-wrap">
                <span class="score-name">B</span>
                <div id="1-ball" class="score-circle"></div>
                <div id="2-ball" class="score-circle"></div>
                <div id="3-ball" class="score-circle"></div>
            </div>
            <div class="score-wrap">
                <span class="score-name">O</span>
                <div id="1-out" class="score-circle"></div>
                <div id="2-out" class="score-circle"></div>
                <div id="3-out" class="score-circle"></div>
            </div>
        </div>
    </div>
    <?php 
    if($strike == 3 && $_SESSION['prodnum']) {
        session_unset();
        echo "<script> alert('HomeRun!'); location.href='index.php'; </script>";
    }
    else {
        include "scoreview.php";
        
    }
    ?>
</body>
</html>