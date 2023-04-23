<?php
function random_numbers($a, $b, $n) {
  // Inverte os valores de A e B, se necessário
  if ($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }
  
  $result = array();
  
  // Gera N números aleatórios entre A e B
  for ($i = 0; $i < $n; $i++) {
    $result[] = rand($a, $b);
  }
  
  return $result;
}

// Chama a função para gerar 10 números aleatórios entre 1 e 100
$numbers = random_numbers(1, 100, 10);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Números Aleatórios</title>
</head>
<body>
  <h1>Números Aleatórios</h1>
  <ul>
    <?php foreach ($numbers as $number): ?>
      <li><?= $number ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>
