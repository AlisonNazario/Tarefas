<?php
// Verifica se foi enviado um horário pelo usuário
if(isset($_POST['horario'])){
    $horario = $_POST['horario'];
    
    // Verifica se o horário está no formato correto
    if(preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $horario, $matches)){
        $minutos = intval($matches[2]); // Extrai os minutos
        
        // Formata os minutos no formato 99
        $minutos_formatados = str_pad($minutos, 2, '0', STR_PAD_LEFT);
        
        echo "Minutos formatados: " . $minutos_formatados;
    }else{
        echo "Formato de horário inválido. Use o formato HH:MM:SS (formato 24 horas).";
    }
}
?>

<!-- Formulário para inserir o horário -->
<form method="POST" action="">
    <label for="horario">Horário (HH:MM:SS):</label>
    <input type="text" name="horario" id="horario" required>
    <button type="submit">Enviar</button>
</form>
