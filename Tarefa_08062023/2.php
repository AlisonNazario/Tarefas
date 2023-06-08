<!DOCTYPE html>
<html>
<head>
    <title>Manipulação de Datas</title>
</head>
<body>
    <h1>Manipulação de Datas</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtém os valores dos campos do formulário
        $dias = $_POST['dias'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
        $operacao = $_POST['operacao'];

        // Cria a data atual
        $dataAtual = new DateTime();

        // Adiciona ou subtrai os valores fornecidos
        if ($operacao === 'somar') {
            $dataAtual->add(new DateInterval("P{$dias}D"));
            $dataAtual->add(new DateInterval("P{$mes}M"));
            $dataAtual->add(new DateInterval("P{$ano}Y"));
        } else {
            $dataAtual->sub(new DateInterval("P{$dias}D"));
            $dataAtual->sub(new DateInterval("P{$mes}M"));
            $dataAtual->sub(new DateInterval("P{$ano}Y"));
        }

        // Obtém o dia da semana
        $diaSemana = $dataAtual->format('N');

        // Cria um array com os nomes dos dias da semana em português
        $diasSemana = array(
            '1' => 'Segunda-feira',
            '2' => 'Terça-feira',
            '3' => 'Quarta-feira',
            '4' => 'Quinta-feira',
            '5' => 'Sexta-feira',
            '6' => 'Sábado',
            '7' => 'Domingo'
        );

        // Obtém o nome do dia da semana em português
        $nomeDiaSemana = $diasSemana[$diaSemana];

        // Obtém o nome do mês em português
        $nomeMes = strftime('%B', $dataAtual->getTimestamp());

        // Exibe a nova data formatada
        echo "<p>{$nomeDiaSemana}, {$dataAtual->format('d')} de {$nomeMes} de {$dataAtual->format('Y')}</p>";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="dias">Quantidade de dias:</label>
        <input type="number" id="dias" name="dias" required><br>

        <label for="mes">Mês:</label>
        <input type="number" id="mes" name="mes" required><br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required><br>

        <label for="operacao">Operação:</label>
        <input type="radio" id="somar" name="operacao" value="somar" checked>
        <label for="somar">Somar</label>
        <input type="radio" id="subtrair" name="operacao" value="subtrair">
        <label for="subtrair">Subtrair</label><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
