<!DOCTYPE html>
<html>
<head>
    <title>Verificar se é AM ou PM</title>
</head>
<body>
    <form method="post" action="">
        <label for="horario">Insira o horário (formato 24 horas - hh:mm:ss):</label>
        <input type="text" name="horario" id="horario" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $horario = $_POST["horario"];
        $partes = explode(":", $horario);

        if (count($partes) == 3) {
            $hora = intval($partes[0]);

            if ($hora >= 0 && $hora <= 23) {
                if ($hora >= 12) {
                    echo "<p>O horário $horario é PM.</p>";
                } else {
                    echo "<p>O horário $horario é AM.</p>";
                }
            } else {
                echo "<p>O horário inserido é inválido.</p>";
            }
        } else {
            echo "<p>O formato do horário é inválido. Insira no formato hh:mm:ss.</p>";
        }
    }
    ?>
</body>
</html>
