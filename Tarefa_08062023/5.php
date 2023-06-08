

<!DOCTYPE html>
<html>
<head>
    <title>Data por Extenso</title>
</head>
<body>
    <h1>Data por Extenso</h1>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="data">Informe uma data (dd/mm/yyyy):</label>
        <input type="text" name="data" required><br>

        <input type="submit" value="Exibir por Extenso">
    </form>
    <br><br>
    <?php
function dataPorExtenso($data) {
    // Array com os nomes dos meses
    $nomesMeses = array(
        1 => 'janeiro', 2 => 'fevereiro', 3 => 'março',
        4 => 'abril', 5 => 'maio', 6 => 'junho',
        7 => 'julho', 8 => 'agosto', 9 => 'setembro',
        10 => 'outubro', 11 => 'novembro', 12 => 'dezembro'
    );

    // Array com os nomes dos dias da semana
    $nomesDiasSemana = array(
        0 => 'domingo', 1 => 'segunda-feira', 2 => 'terça-feira',
        3 => 'quarta-feira', 4 => 'quinta-feira', 5 => 'sexta-feira', 6 => 'sábado'
    );

    // Extrair o dia, mês e ano da data
    list($dia, $mes, $ano) = explode('/', $data);

    // Obter o nome do mês e o dia da semana
    $nomeMes = $nomesMeses[(int)$mes];
    $diaSemana = date('w', strtotime($data));
    $nomeDiaSemana = $nomesDiasSemana[$diaSemana];

    // Construir a data por extenso
    $dataExtenso = "dia $dia do $nomeMes de $ano, $nomeDiaSemana";

    return $dataExtenso;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];

    // Verificar se a data foi fornecida no formato correto
    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $data)) {
        $dataExtenso = dataPorExtenso($data);
        echo "Data por extenso: $dataExtenso";
    } else {
        echo "Formato de data inválido. Por favor, informe a data no formato dd/mm/yyyy.";
    }
}
?>
</body>
</html>
