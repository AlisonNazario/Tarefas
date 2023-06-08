<!DOCTYPE html>
<html>
<head>
    <title>Contagem de Domingos no Mês</title>
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

        // Calcula a quantidade de domingos no mês fornecido
        $primeiroDia = date("Y-m-01", strtotime($data));
        $ultimoDia = date("Y-m-t", strtotime($data));
        $numDomingos = 0;

        while (strtotime($primeiroDia) <= strtotime($ultimoDia)) {
            if (date("N", strtotime($primeiroDia)) == 7) { // 7 representa domingo
                $numDomingos++;
            }
            $primeiroDia = date("Y-m-d", strtotime($primeiroDia . "+1 day"));
        }

        echo "O mês $mes do ano $ano possui $numDomingos domingos.";
    }
    ?>
</body>
</html>
