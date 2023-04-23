<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function serie($n) {
    $s = '';
    $produto = 37 * 38;
    $soma = $produto;
    $s .= "$produto/1 ";
    for ($i = 2; $i <= $n; $i++) {
      $produto = ($produto * (37 - $i + 1)) / $i;
      $soma += $produto;
      $s .= "+ $produto/$i ";
    }
    $s .= "= $soma";
    return $s;
  }
  if (isset($_POST['n'])) {
    $n = $_POST['n'];
    $resultado = serie($n);
    echo "<p>$resultado</p>";
  }
  ?>
  <form method="post">
    <label for="n">Digite o valor de n:</label>
    <input type="text" name="n" id="n">
    <button type="submit">Calcular</button>
  </form>
    
</body>
</html>