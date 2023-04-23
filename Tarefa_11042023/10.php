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
        <input type="text" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
    <?php

     $num = isset($_POST['num']) ? $_POST['num'] : "";

     function reversoNumero($numero) {
        $numeroReverso = strrev($numero);
        return $numeroReverso;
      }
      
      
      
      echo "O reverso de $num é " . reversoNumero($num) . "<br>";
      
      
      
    ?>
</body>
</html>