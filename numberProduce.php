<?php
    $arr = array(1,2,3,4,5,6,7,8,9);
    shuffle($arr);
    $prodnum = array_slice($arr,0,3);
    print_r($prodnum);
    $qnum1 = $prodnum[0];
    $qnum2 = $prodnum[1];
    $qnum3 = $prodnum[2];
    $text = "~ Play Ball ~";
    $gametime = '0';

    session_start();
    $_SESSION['gametime'] = $gametime;
    $_SESSION['prodnum'] = $prodnum;
    $_SESSION['text'] = $text;


    if($prodnum) {
        echo "<script> location.href='index.php'; </script>";
    }
?>