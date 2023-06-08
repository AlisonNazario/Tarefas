<!DOCTYPE html>
<html>
<head>
    <title>Extrair Ano da Data</title>
</head>
<body>
    <form method="POST" action="">
        <label for="data">Digite uma data (formato: dd/mm/aaaa):</label>
        <input type="text" name="data" id="data" required>
        <input type="submit" value="Extrair Ano">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        $ano = date("Y", strtotime($data));
        echo "O ano da data $data é $ano.";
    }
    ?>
</body>
</html>
