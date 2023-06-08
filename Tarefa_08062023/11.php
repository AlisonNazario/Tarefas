<!DOCTYPE html>
<html>
<head>
    <title>Contagem de Sábados no Mês</title>
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

        // Extrai o mês e o ano da data fornecida
        list($dia, $mes, $ano) = explode('/', $data);

        // Calcula a quantidade de sábados no mês fornecido
        $primeiroDia = date("Y-m-01", strtotime($data));
        $ultimoDia = date("Y-m-t", strtotime($data));
        $numSabados = 0;

        while (strtotime($primeiroDia) <= strtotime($ultimoDia)) {
            if (date("N", strtotime($primeiroDia)) == 6) { // 6 representa sábado
                $numSabados++;
            }
            $primeiroDia = date("Y-m-d", strtotime($primeiroDia . "+1 day"));
        }

        echo "O mês $mes do ano $ano possui $numSabados sábados.";
    }
    ?>
</body>
</html>
