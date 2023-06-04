<!DOCTYPE html>
<html>
<head>
    <title>Resultado - Gerador de Cartelas da Mega Sena</title>
</head>
<body>
    <h1>Resultado - Gerador de Cartelas da Mega Sena</h1>
    <?php
    // Obtém a quantidade de cartelas e o número de busca do formulário
    $num_cartelas = $_POST['num_cartelas'];
    $numero_busca = $_POST['numero_busca'];

    // Função para gerar um número aleatório entre 1 e 60
    function gerarNumeroAleatorio()
    {
        return rand(1, 61);
    }

    // Função para gerar uma cartela com números aleatórios
    function gerarCartela()
    {
        $cartela = array();
        while (count($cartela) < 6) {
            $numero = gerarNumeroAleatorio();
            if (!in_array($numero, $cartela)) {
                $cartela[] = $numero;
            }
        }
        return $cartela;
    }
    
      // Gera as cartelas
      for ($i = 1; $i <= $num_cartelas; $i++) {
        $cartela = gerarCartela();
        echo '<h3>Cartela ' . $i . ':</h3>';
        echo '<ul>';
        foreach ($cartela as $numero) {
            if ($numero == $numero_busca) {
                echo '<li>' . $numero . ' *</li>';
            } else {
                echo '<li>' . $numero . '</li>';
            }
        }
        echo '</ul>';
    }
    ?>
</body>
</html>
