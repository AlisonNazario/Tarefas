<?php
$qc = $_POST['num_cartelas'];
$nb = $_POST['numero_busca'];

function gerarCartela() {
    $cartela = array();
    for ($i = 0; $i < 6; $i++) {
        $numero = rand(1, 61);
        $cartela[] = $numero;
    }
    return $cartela;
}

$cartelas = array();
$tne = 0;
for ($i = 0; $i < $qc; $i++) {
    $cartela = gerarCartela();
    $cartelas[] = $cartela;
    $qne = array_count_values($cartela)[$nb] ?? 0;
    $tne += $qne;
}

echo "Cartelas:<br>";
foreach ($cartelas as $cartela) {
    foreach ($cartela as $numero) {
        echo "|";
        if ($numero == $nb) {
            echo $numero . "* ";
        } else {
            echo $numero . " | ";
           
        }
    }
  
    $sc = array_sum($cartela);
    $md = $sc / 6;
    echo "| " . $sc . " | " . $md . "<br>";
}

$sm = 0;
foreach ($cartelas as $cartela) {
    $sm += array_sum($cartela);
}
$mm = $sm / ($qc * 6);

echo "<br>";
echo "Soma da Matriz: " . $sm . "<br>";
echo "Média da Matriz: " . $mm . "<br>";
echo "Número " . $nb . " foi encontrado " . $tne . " vezes";
?>
