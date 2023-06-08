<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Pagamento</title>
</head>
<body>
    <h1>Calculadora de Pagamento</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="valor">Valor da compra:</label>
        <input type="number" name="valor" id="valor" required><br>

        <label for="vencimento">Data de vencimento:</label>
        <input type="date" name="vencimento" id="vencimento" required><br>

        <label for="pagamento">Data de pagamento:</label>
        <input type="date" name="pagamento" id="pagamento" required><br>

        <label for="multa">Multa (%):</label>
        <input type="number" name="multa" id="multa" required><br>

        <label for="juros">Juros (% ao dia):</label>
        <input type="number" name="juros" id="juros" required><br>

        <input type="radio" name="contar_fim_de_semana" value="1" checked>
        <label for="contar_fim_de_semana">Considerar sábados e domingos</label><br>

        <input type="radio" name="contar_fim_de_semana" value="0">
        <label for="contar_fim_de_semana">Não considerar sábados e domingos</label><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $vencimento = new DateTime($_POST["vencimento"]);
        $pagamento = new DateTime($_POST["pagamento"]);
        $multa = $_POST["multa"];
        $juros = $_POST["juros"];
        $contarFimDeSemana = $_POST["contar_fim_de_semana"];

        $diasAtraso = $vencimento->diff($pagamento)->days;
        $multaValor = ($multa / 100) * $valor;
        $jurosValor = ($juros / 100) * $valor * $diasAtraso;

        if ($contarFimDeSemana == 0) {
            $diasAtraso -= contarFimDeSemana($vencimento, $pagamento);
        }

        $novoValor = $valor + $multaValor + $jurosValor;

        echo "<h2>Resultados:</h2>";
        echo "Valor original: R$ " . $valor . "<br>";
        echo "Multa: R$ " . $multaValor . "<br>";
        echo "Valor dos juros: R$ " . $jurosValor . "<br>";
        echo "Dias de juros: " . $diasAtraso . "<br>";
        echo "Novo valor: R$ " . $novoValor . "<br>";
    }

    function contarFimDeSemana($inicio, $fim) {
        $fimDeSemana = 0;
        $interval = new DateInterval('P1D');
        $period = new DatePeriod($inicio, $interval, $fim);

        foreach ($period as $date) {
            $dayOfWeek = $date->format('N');
            if ($dayOfWeek >= 6) {
                $fimDeSemana++;
            }
        }

        return $fimDeSemana;
    }
    ?>
</body>
</html>
