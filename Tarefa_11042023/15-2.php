<?php
function order_array($array, $order) {
  if ($order === "asc") {
    sort($array);
  } elseif ($order === "desc") {
    rsort($array);
  }
  
  return $array;
}

if (isset($_POST["array"]) && isset($_POST["order"])) {
  $array = explode(";", $_POST["array"]);
  $order = $_POST["order"];

  $result = order_array($array, $order);

  echo "Array ordenado: ";
  foreach ($result as $value) {
    echo $value . " ";
  }
} else {
  echo "Dados não recebidos.";
}
?>