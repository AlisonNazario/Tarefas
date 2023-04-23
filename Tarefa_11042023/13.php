<?php
function criarInput($name, $id, $class, $value, $type) {
    // Verifica se o tipo informado é válido
    switch($type) {
      case 'text':
      case 'password':
      case 'number':
      case 'email':
      case 'date':
        // Tipo válido, não faz nada
        break;
      default:
        // Tipo inválido, define como padrão 'text'
        $type = 'text';
    }
  
    // Retorna o campo input com os atributos informados
    return "<input type='$type' name='$name' id='$id' class='$class' value='$value'>";
  }
  
  // Exemplo de uso da função
  echo criarInput('nome', 'id1', 'classe1', '', 'text','<br>');
  
?>