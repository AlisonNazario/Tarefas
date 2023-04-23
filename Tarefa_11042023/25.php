<!DOCTYPE html>
<html>
<head>
  <title>Exemplo de diferença entre arrays</title>
</head>
<body>
  <form method="post">
    <label for="arrayA">Array A:</label>
    <input type="text" id="arrayA" name="arrayA">
    <br>
    <label for="arrayB">Array B:</label>
    <input type="text" id="arrayB" name="arrayB">
    <br>
    <button type="submit">Calcular diferença</button>
  </form>

  <?php

function diffArrays($arrayA, $arrayB) {
    $diff = array();
    foreach ($arrayA as $element) {
      if (!in_array($element, $arrayB)) {
        array_push($diff, $element);
      }
    }
    return $diff;
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayA = explode(",", $_POST["arrayA"]);
    $arrayB = explode(",", $_POST["arrayB"]);

    $diff = diffArrays($arrayA, $arrayB);

    echo "<p>Diferença entre os arrays:</p>";
    echo "<ul>";
    foreach ($diff as $element) {
      echo "<li>$element</li>";
    }
    echo "</ul>";
  }
  ?>
</body>
</html>
