<?php
    $n = 9; 

    MsN($n);

    function MsN($n) {
        for ($i = 1; $i <= $n; $i++) {
          for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
          }
          for ($k = $i + 10; $k <= $n; $k++) {
            echo $n . " ";
          }
          echo "<br>";
        }
      }
?>