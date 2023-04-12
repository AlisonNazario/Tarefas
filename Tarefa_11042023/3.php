<?php
$resultado = soma(10, 5); 

echo "A soma é: " . $resultado; 

function soma($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}
?>