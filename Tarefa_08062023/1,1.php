<?php

function dias($date) {
    $day = date('N', strtotime($date));
    return ($day < 6);
}

function ad($date, $days) {
    $i = 0;
    while ($days > 0) {
        $date = date('Y-m-d', strtotime($date . " + $i month"));
        if (dias($date)) {
            $days--;
            $i++;
        }
    }
    return $date;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $compra = $_POST['data_compra'];
    $parcelas = $_POST['num_parcelas'];

    
    $vencimentos = [];
    for ($i = 1; $i <= $parcelas; $i++) {
        $dataVencimento = ad($compra, $i);
        $vencimentos[$i] = $dataVencimento;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
   
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="data_compra">Data da Compra (AAAA-MM-DD):</label>
        <input type="text" name="data_compra" id="data_compra" required><br><br>

        <label for="num_parcelas">Número de Parcelas:</label>
        <input type="number" name="num_parcelas" id="num_parcelas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php if (isset($vencimentos)): ?>
        
        <table>
            <tr>
                <th>Número da Parcela</th>
                
                <th>Data de Vencimento</th>
            </tr>
            <?php foreach ($vencimentos as $parcela => $vencimento): ?>
                <tr>
                    <td><?php echo $parcela; ?></td>
                    <td><?php echo $vencimento; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
