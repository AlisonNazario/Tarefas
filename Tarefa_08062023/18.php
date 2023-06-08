<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    // Verificar se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter a data enviada
        $data = $_POST["data"];
        
        // Verificar se a data está no formato correto
        if (preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/", $data, $matches)) {
            $dia = $matches[1];
            $mes = $matches[2];
            $ano = $matches[3];
            
            // Converter a data para o formato aceito pelo strtotime()
            $dataFormatada = $mes . '/' . $dia . '/' . $ano;
            
            // Obter o dia do ano
            $diaDoAno = date('z', strtotime($dataFormatada));
            
            echo "O dia do ano para a data $data é $diaDoAno.";
        } else {
            echo "Formato de data inválido. Use o formato DD/MM/AAAA.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="data">Data (DD/MM/AAAA):</label>
        <input type="text" id="data" name="data" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
