<?php

$n = 100;

exibirSerie($n); 

function exibirSerie($n) {
    $serie = array();
    for ($i = 1; $i <= $n; $i++) {
      for ($j = 1; $j <= $i; $j++) {
        $serie[] = $n;
        echo $j . " ";
      }
      for ($k = $n; $j <= $i; $k++) {
        $serie[] = $n;
        echo $n . " ";
      }
      echo "<br>";
    }
  }
?>