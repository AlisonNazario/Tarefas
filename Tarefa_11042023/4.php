<!DOCTYPE html>
<html>
   
  <head>
    <meta charset="UTF-8">
    <title>Função que retorna P, N ou Z</title>
  </head>
  <body>

    <form action="" method="post">
        <input type="text" name="num1" id="num1">
        <input type="submit" value="Enviar"><br>

    </form>

    <?php
     $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;

      function checkNumber($num) {
        if ($num > 0) {
          return "P";
        } else if ($num < 0) {
          return "N";
        } else {
          return "Z";
        }
      }

    
      echo "O número $num1 é " . checkNumber($num1) . "<br>";
    ?>
  </body>
</html>

