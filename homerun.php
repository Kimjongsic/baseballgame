<?php
    session_start();
    session_destroy();

    echo "<script>alert('HomeRun!' \n '처음으로 돌아갑니다.'); location.href='index.php';</script>";
?>