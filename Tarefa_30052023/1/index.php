<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Cartelas da Mega Sena</title>
</head>
<body>
    <h1>Gerador de Cartelas da Mega Sena</h1>
    <form action="gerar.php" method="post">
        <label for="num_cartelas">Quantidade de cartelas:</label>
        <input type="number" name="num_cartelas" id="num_cartelas" min="1" required><br><br>
        <label for="numero_busca">Número para busca:</label>
        <input type="number" name="numero_busca" id="numero_busca" min="1" max="60" required><br><br>
        <input type="submit" value="Gerar Cartelas">
    </form>
</body>
</html>
