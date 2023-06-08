<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Diferença de Datas</title>
</head>
<body>
    <h2>Calculadora de Diferença de Datas</h2>
    <form action="" method="post">
        <label>Data 1:</label>
        <input type="date" name="data1" required><br><br>
        <label>Data 2:</label>
        <input type="date" name="data2" required><br><br>
        <label for="contar_fds">Contar sábados e domingos:</label>
        <input type="radio" name="contar_fds" value="sim" checked>Sim
        <input type="radio" name="contar_fds" value="nao">Não<br><br>
        <input type="submit" value="Calcular diferença">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data1 = new DateTime($_POST["data1"]);
        $data2 = new DateTime($_POST["data2"]);
        $diferenca = $data1->diff($data2);
        
        // Verificar se deve contar sábados e domingos
        $contar_fds = ($_POST["contar_fds"] == "sim");

        // Função para verificar se uma data é um sábado ou domingo
        function ehFimDeSemana($data) {
            return (date('N', strtotime($data)) >= 6);
        }

        // Calcular a diferença em dias
        $dias = $diferenca->days + 1; // +1 para incluir o último dia
        
        // Se não deve contar sábados e domingos, subtrair os dias do fim de semana
        if (!$contar_fds) {
            $inicio = clone $data1;
            $fim = clone $data2;

            while ($inicio <= $fim) {
                if (ehFimDeSemana($inicio->format('Y-m-d'))) {
                    $dias--;
                }
                $inicio->add(new DateInterval('P1D'));
            }
        }

        echo "<p>A diferença em dias entre as datas é: $dias dia(s).</p>";
    }
    ?>
</body>
</html>
