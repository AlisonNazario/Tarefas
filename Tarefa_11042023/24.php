<!DOCTYPE html>
<html>
<head>
  <title>Merge arrays</title>
</head>
<body>
  <?php
  function mergeArrays($array1, $array2) {
  $mergedArray = array_merge($array1, $array2);
  return $mergedArray;
}

    $array1 = array(1, 2, 3);
    $array2 = array(4, 5, 6);
    $mergedArray = mergeArrays($array1, $array2);
  ?>
  <p>Array 1: <?php echo implode(", ", $array1); ?></p>
  <p>Array 2: <?php echo implode(", ", $array2); ?></p>
  <p>Merged array: <?php echo implode(", ", $mergedArray); ?></p>
</body>
</html>
