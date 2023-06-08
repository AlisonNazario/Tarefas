<?php
// Função para obter o dia da semana por extenso
function obter_dia_semana($data) {
    $dias_semana = array(
    'Domingo', 
    'Segunda-feira', 
    'Terça-feira', 
    'Quarta-feira', 
    'Quinta-feira', 
    'Sexta-feira', 
    'Sábado');
    return $dias_semana[date('w', strtotime($data))];
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores do formulário
    $data = $_POST['data'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];

    // Converte a data para objeto DateTime
    $data_atual = new DateTime($data);

    // Realiza a adição ou subtração de acordo com o tipo selecionado
    if ($tipo === 'soma') {
        $data_atual->add(new DateInterval("P{$quantidade}D"));
    } else {
        $data_atual->sub(new DateInterval("P{$quantidade}D"));
    }

    // Formata a data para exibição
    $data_formatada = $data_atual->format('d \d\e F \d\e Y');
    $dia_semana = obter_dia_semana($data_atual->format('Y-m-d'));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manipulação de Datas</title>
</head>
<body>
    <h1>Manipulação de Datas</h1>

    <form method="POST">
        <label for="data">Data e Hora:</label>
        <input type="text" id="data" name="data" placeholder="dd/mm/aaaa hh:mm:ss" required>
        <br><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required>
        <br><br>
        <label for="soma">Somar</label>
        <input type="radio" id="soma" name="tipo" value="soma" checked>
        <label for="subtracao">Subtrair</label>
        <input type="radio" id="subtracao" name="tipo" value="subtracao">
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Resultado:</h2>
        <p><?php echo $dia_semana . ', ' . $data_formatada; ?></p>
    <?php endif; ?>
</body>
</html>
