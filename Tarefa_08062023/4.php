<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Parcelas</title>
</head>
<body>
    <h1>Calculadora de Parcelas</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dataCompra = $_POST["data_compra"];
        $numParcelas = $_POST["num_parcelas"];

        // Calcular a data de vencimento de cada parcela
        $dataVencimento = new DateTime($dataCompra);

        echo "<h2>Detalhes das Parcelas:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= $numParcelas; $i++) {
            echo "<li>Parcela $i - Data de Vencimento: " . $dataVencimento->format('Y-m-d') . "</li>";
            $dataVencimento->add(new DateInterval('P1M')); // Adicionar 1 mês para a próxima parcela
        }
        echo "</ul>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="data_compra">Data de Compra:</label>
        <input type="date" name="data_compra" required><br>

        <label for="num_parcelas">Número de Parcelas:</label>
        <input type="number" name="num_parcelas" min="1" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
