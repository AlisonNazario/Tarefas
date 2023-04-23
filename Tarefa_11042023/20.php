<?php
function fatorial($n) {
  $resultado = 1;
  for ($i = 1; $i <= $n; $i++) {
    $resultado *= $i;
  }
  echo "$n! = ";
  for ($i = $n; $i >= 1; $i--) {
    echo $i;
    if ($i > 1) {
      echo " * ";
    }
  }
  echo " = $resultado";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Calculadora de Fatorial</title>
</head>
<body>
  <form method="post">
    <label for="numero">Digite um número inteiro:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Calcular Fatorial</button>
  </form>

  <?php
  if (isset($_POST['numero'])) {
    $n = $_POST['numero'];
    fatorial($n);
  }
  ?>
</body>
</html>
