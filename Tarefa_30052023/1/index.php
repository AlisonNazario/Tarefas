<!DOCTYPE html>
<html lang="pt-BR">
  
<?php
    $cartelas = isset($_POST['cartelas']) ? $_POST['cartelas'] : 1;
    $numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
   
    function as($numero){
     str_replace("*");
    }
?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
Número de cartelas: <input type="text" name="cartelas" id="cartelas"><br>
Número para buscar: <input type="text" name="numero" id="numero"><br>
<input type="submit" value="Gerar">
</form>
<?php

    for ($y = 0; $y < $cartelas; $y++){
        echo "<br>";
        for ($x = 0; $x < 6; $x++)    
            echo rand(1,6)." | ";
        
       
       
    }
   
      
    
?>
</body>
</html>