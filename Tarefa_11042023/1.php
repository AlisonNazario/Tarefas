<?php
$n = 5;

sMN($n);

function sMN($n) {
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $i;
      if ($j < $i) {
        echo " ";
      }
    }
    echo "<br>";
  }
}


?>