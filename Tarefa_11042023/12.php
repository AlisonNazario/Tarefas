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
        <input type="text" name="palavra" id="palavra">
        <input type="submit" value="Enviar">
    </form>

<?php
 $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : "";
function criptografaPalavra($palavra) {
    // Usa o algoritmo SHA1 para criptografar a palavra
    $palavraCriptografada = sha1($palavra);
  
    return $palavraCriptografada;
  }

  
  echo "A palavra $palavra criptografada é " . criptografaPalavra($palavra);
  
?>
</body>
</html>