<!DOCTYPE html>
<html>
<head>
    <title>Dia da Semana</title>
</head>
<body>
    <form method="POST">
        <label for="data">Digite a data (formato: 99/99/9999):</label>
        <input type="text" name="data" id="data" required>
        <input type="submit" value="Obter dia da semana">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        $timestamp = strtotime($data);
        $dia_semana = date("d", $timestamp);

        echo "<p>O dia da semana dessa data é: $dia_semana</p>";
    }
    ?>
</body>
</html>
