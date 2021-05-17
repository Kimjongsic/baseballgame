<?php
    session_start();
    session_destroy();

    echo "<script> alert('다시시작합니다.'); location.href='index.php'; </script>";
?>