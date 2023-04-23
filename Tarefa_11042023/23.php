<?php

function divisores($n) {
    $divisores = array();
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $divisores[] = $i;
        }
    }
    return $divisores;
}

// Exemplo de uso da função
$num = 9;
$resultado = divisores($num);

echo "Divisores de $num: <br>";
echo implode(", ", $resultado);

$resultado = divisores($num);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Divisores de <?php echo $num ?></title>
</head>
<body>
    <h1>Divisores de <?php echo $num ?>:</h1>
    <ul>
    <?php foreach ($resultado as $divisor): ?>
        <li><?php echo $divisor ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>

