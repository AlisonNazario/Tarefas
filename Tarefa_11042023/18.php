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
function gerar_progressao($a1, $r, $q, $tipo) {
  $valores = array();

  // Verifica se é uma PA ou uma PG
  if ($tipo == 'pa') {
    for ($i = 0; $i < $q; $i++) {
      $valores[] = $a1 + $i * $r;
    }
  } else if ($tipo == 'pg') {
    for ($i = 0; $i < $q; $i++) {
      $valores[] = $a1 * pow($r, $i);
    }
  }

  // Cria a tabela HTML para exibir os valores gerados
  echo '<table>';
  echo '<tr><th>' . ucfirst($tipo) . '</th></tr>';
  foreach ($valores as $valor) {
    echo '<tr><td>' . $valor . '</td></tr>';
  }
  echo '</table>';
}
gerar_progressao(2, 3, 5, 'pa'); // Gera uma PA com a1 = 2, r = 3 e 5 elementos
gerar_progressao(2, 3, 5, 'pg'); // Gera uma PG com a1 = 2, r = 3 e 5 elementos


?>
</body>
</html>