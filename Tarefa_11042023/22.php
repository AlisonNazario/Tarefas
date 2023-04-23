<?php
function mostrarSerie($n) {
    $soma = 0;
    for ($i = 1, $j = 1; $i <= $n; $i++, $j += 2) {
        $soma += $i / $j;
        echo "$i/$j + ";
    }
    echo "... = $soma";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Série</title>
</head>
<body>
	<h1>Série</h1>
	<p><?php mostrarSerie(10); ?></p>
</body>
</html>


