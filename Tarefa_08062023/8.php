<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Dias Vividos</title>
</head>
<body>
    <h1>Calculadora de Dias Vividos</h1>
    <form method="POST">
        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dataNascimento = $_POST["data_nascimento"];
        $hoje = date("Y-m-d");
        $diferenca = strtotime($hoje) - strtotime($dataNascimento);
        $diasVividos = floor($diferenca / (60 * 60 * 24));

        echo "<p>Voc&ecirc; j&aacute; viveu $diasVividos dias!</p>";
    }
    ?>
</body>
</html>
