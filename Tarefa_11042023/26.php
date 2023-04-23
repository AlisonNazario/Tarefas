<!DOCTYPE html>
<html>
<head>
	<title>Exemplo</title>
</head>
<body>
	<?php
function intersection($A, $B) {
    $result = array();
    foreach($A as $a) {
      if(in_array($a, $B)) {
        $result[] = $a;
      }
    }
    return $result;
  }
  

	  
	  
	  //exemplo de uso da função
	  $A = array(1, 2, 3, 4);
	  $B = array(3, 4, 5, 6);
	  $intersec = intersection($A, $B);
	  
	  echo "A = [" . implode(", ", $A) . "]<br>";
	  echo "B = [" . implode(", ", $B) . "]<br>";
	  echo "Intersecção = [" . implode(", ", $intersec) . "]";
	?>
</body>
</html>
