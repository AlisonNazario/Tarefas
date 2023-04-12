<?php
$resultado = soma(99, 100); 

echo "A soma é: " . $resultado; 

function soma($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}
?>