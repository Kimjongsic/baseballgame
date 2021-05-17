<?php
    for($n=1; $n<=$strike; $n++) {
        echo "<script>
                var strike = document.getElementById('$n-strike');
                strike.style.backgroundColor='yellow';
                strike.style.border='1px solid yellow';
            </script>" ;
    }
    for($m=1; $m<=$ball; $m++) {
        echo "<script>
                var ball = document.getElementById('$m-ball');
                ball.style.backgroundColor='green';
                ball.style.border='1px solid green';
            </script>" ;
    }
    for($p=1; $p<=$out; $p++) {
        echo "<script>
                var out = document.getElementById('$p-out');
                out.style.backgroundColor='red';
                out.style.border='1px solid red';
            </script>" ;
    }
?>