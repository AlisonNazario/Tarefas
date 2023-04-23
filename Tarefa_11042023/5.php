<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="nota1" id="nota1">
        <input type="submit" value="Enviar">
    </form>
    <?php

    $nota1 = isset($_POST['nota1']) ? $_POST['nota1'] : 0;

    function verificaNota($nota) {
        if ($nota >= 6) {
          return "APROVADO";
        } else {
          return "REPROVADO";
        }
      }
      echo "O aluno obteve nota $nota1 e foi " . verificaNota($nota1) . "<br>";
    ?>
</body>
</html>