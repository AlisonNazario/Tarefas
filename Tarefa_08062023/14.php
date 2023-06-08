<!DOCTYPE html>
<html>
<head>
    <title>Extrair Mês</title>
</head>
<body>
    <form method="POST" action="">
        <label for="data">Digite a data (formato: 99/99/9999):</label>
        <input type="text" name="data" id="data" required>
        <input type="submit" value="Extrair Mês">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST['data'];

        // Quebra a data em partes separadas (dia, mês, ano)
        list($dia, $mes, $ano) = explode('/', $data);

        // Obtém o mês formatado com dois dígitos
        $mesFormatado = str_pad($mes, 2, '0', STR_PAD_LEFT);

        echo "O mês é: $mesFormatado";
    }
    ?>
</body>
</html>
