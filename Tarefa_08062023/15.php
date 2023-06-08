<!DOCTYPE html>
<html>
<head>
    <title>Exibir Dia da Data</title>
</head>
<body>
    <form method="post" action="">
        <label for="data">Digite uma data (formato: dd/mm/aaaa):</label><br>
        <input type="text" id="data" name="data" required><br><br>
        <input type="submit" value="Exibir Dia">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        
        // Verificar se a data está no formato correto
        if (preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/", $data, $matches)) {
            $dia = $matches[1];
            $mes = $matches[2];
            $ano = $matches[3];

            // Verificar se a data é válida
            if (checkdate($mes, $dia, $ano)) {
                echo "O dia da data $data é: $dia";
            } else {
                echo "Data inválida.";
            }
        } else {
            echo "Formato de data inválido.";
        }
    }
    ?>
</body>
</html>
