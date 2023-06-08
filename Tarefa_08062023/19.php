
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de exibição de horas formatadas</title>
</head>
<body>
    <h1>Horas no formato 99</h1>

    <?php
    // Obter a hora atual
    $horaAtual = date('H:i:s');

    // Extrair apenas as horas
    $horas = date('H', strtotime($horaAtual));
    ?>

    <p>Horas: <?php echo $horas; ?></p>
</body>
</html>
