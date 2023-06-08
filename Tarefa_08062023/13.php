<!DOCTYPE html>
<html>
<head>
    <title>Identificar a Semana do Ano</title>
</head>
<body>
    <h1>Identificar a Semana do Ano</h1>
    <form method="POST" action="">
        <label for="data">Digite a data (formato 99/99/9999):</label>
        <input type="text" name="data" id="data" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>
    <br>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém a data digitada
        $data = $_POST["data"];

        // Verifica se a data está no formato correto
        if (preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/", $data, $matches)) {
            $dia = intval($matches[1]);
            $mes = intval($matches[2]);
            $ano = intval($matches[3]);

            // Calcula a semana do ano
            $semana = date("W", mktime(0, 0, 0, $mes, $dia, $ano));

            // Exibe o resultado
            echo "A data $data pertence à semana $semana do ano $ano.";
        } else {
            echo "Formato de data inválido. Por favor, digite no formato 99/99/9999.";
        }
    }
    ?>
</body>
</html>
