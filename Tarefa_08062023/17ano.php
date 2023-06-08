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
            
            // Verificar se o ano é bissexto
            if ((($ano % 4 == 0) && ($ano % 100 != 0)) || ($ano % 400 == 0)) {
                echo "O ano $ano é bissexto.";
            } else {
                echo "O ano $ano não é bissexto.";
            }
        } else {
            echo "Formato de data inválido. Use o formato DD/MM/AAAA.";
        }
    }
    ?>
</body>
</html>
