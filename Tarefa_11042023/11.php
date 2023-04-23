<?php
function dataPorExtenso($data) {
    // Quebra a data em dia, mês e ano
    $partesData = explode('/', $data);
  
    // Verifica se a data é válida
    if(!checkdate($partesData[1], $partesData[0], $partesData[2])) {
      return "ERROR";
    }
  
    // Array com os nomes dos meses
    $meses = array(
      1 => 'Janeiro',
      2 => 'Fevereiro',
      3 => 'Março',
      4 => 'Abril',
      5 => 'Maio',
      6 => 'Junho',
      7 => 'Julho',
      8 => 'Agosto',
      9 => 'Setembro',
      10 => 'Outubro',
      11 => 'Novembro',
      12 => 'Dezembro'
    );
  
    // Obtém o nome do mês por extenso
    $mesPorExtenso = $meses[intval($partesData[1])];
  
    // Monta a data por extenso
    $dataPorExtenso = $partesData[0] . ' de ' . $mesPorExtenso . ' de ' . $partesData[2];
  
    return $dataPorExtenso;
  }
  
  // Exemplo de uso da função
  $data1 = '23/09/2023';
  $data2 = '31/13/2023';
  
  echo "A data $data1 por extenso é " . dataPorExtenso($data1) . "<br>";
  echo "A data $data2 por extenso é " . dataPorExtenso($data2) . "<br>";
  
?>