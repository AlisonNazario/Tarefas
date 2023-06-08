<?php
// Função para retornar o nome do dia da semana em português
function obterDiaSemana($data) {
    $diasSemana = array(
        'Domingo',
        'Segunda-feira',
        'Terça-feira',
        'Quarta-feira',
        'Quinta-feira',
        'Sexta-feira',
        'Sábado'
    );

    $diaSemana = date('w', strtotime($data));
    return $diasSemana[$diaSemana];
}

// Função para retornar o nome do mês em português
function obterMes($data) {
    $meses = array(
        'janeiro',
        'fevereiro',
        'março',
        'abril',
        'maio',
        'junho',
        'julho',
        'agosto',
        'setembro',
        'outubro',
        'novembro',
        'dezembro'
    );

    $mes = date('n', strtotime($data));
    return $meses[$mes - 1];
}

// Função para formatar a data por extenso em português
function formatarData($data) {
    $diaSemana = obterDiaSemana($data);
    $dia = date('d', strtotime($data));
    $mes = obterMes($data);
    $ano = date('Y', strtotime($data));

    return "{$diaSemana}, {$dia} de {$mes} de {$ano}";
}

// Verifica se a data foi submetida via formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém a data do formulário
    $data = $_POST['data'];

    // Formata a data por extenso
    $dataPorExtenso = formatarData($data);
} else {
    // Define uma data padrão
    $data = '13/09/2017';

    // Formata a data por extenso
    $dataPorExtenso = formatarData($data);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data por Extenso</title>
</head>
<body>
    <h1>Data por Extenso</h1>

    <form method="POST" action="">
        <label for="data">Digite a data (dd/mm/aaaa):</label>
        <input type="text" name="data" id="data">
        <button type="submit">Formatar</button>
    </form>

    <h2><?php echo $dataPorExtenso; ?></h2>
</body>
</html>
