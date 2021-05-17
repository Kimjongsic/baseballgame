<?php
    $unum = $_POST['unum'];
    $strike = '0';
    $ball = '0';
    $out = '0';
    if($unum !== null) {
        if(empty($_SESSION['prodnum'])) {
            session_unset();
            echo "<script> alert('start를 누르시오.'); location.href='index.php'; </script>";
        } else {
            for($i=0; $i<3; $i++) {
                if($unum[$i] == $_SESSION['prodnum'][$i]) {
                    $strike++;
                }
                elseif(in_array($unum[$i],$_SESSION['prodnum']) && $unum[$i] !== $_SESSION['prodnum'][$i]) {
                    $ball++;
                }
                elseif(in_array($unum[$i],$_SESSION['prodnum']) === false) {
                    $out++;
                }
            }
        }    
    }
?>
