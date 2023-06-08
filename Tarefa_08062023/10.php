<!DOCTYPE html>
<html>
<head>
    <title>Número máximo de dias do mês</title>
</head>
<body>
    <form method="POST" action="">
        <label for="data">Digite uma data (formato: dd/mm/aaaa):</label>
        <input type="text" name="data" id="data" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];

        // Extrai o dia, mês e ano da data fornecida
        list($dia, $mes, $ano) = explode('/', $data);

        // Calcula o número máximo de dias para o mês fornecido
        $numMaxDias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

        echo "O mês $mes do ano $ano possui $numMaxDias dias.";
    }
    ?>
</body>
</html>
