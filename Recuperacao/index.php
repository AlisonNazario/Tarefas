<!DOCTYPE html><!--,"Comcluido"-->

<html lang="en">
<head>
    <?php
    
    $nem = isset($_POST['nem']) ? $_POST['nem'] : "";
    $pes = isset($_POST['pes']) ? $_POST['pes'] : "";
    $origen = array(array("1","João","Software","O meu whatsApp ta travado? ","26/03/2022","software.jpg"),
                    array("2","Maria","Configuração","Como comfigirar um Notboot? ","05/01/2023","configuracao.jpg"),
                    array("3","Pedro","Suporte","Qual é o melhor suporte para Esdudar? ","24/09/2022","suporte.jpg"),
                    array("4","Ana","Login","Não to conseguindo fazer o login do Facebook!","27/12/2020","login.png"),
                    array("5","Gabriel","Conexão","Minha conexão do Blutooth.","31/03/2021","conexao.jpg"),
                    array("6","Rafael","Impressão","Quais são os tipos mais comuns de impressoras?","09/07/2020","impressao.jpg"),
                    array("7","Luiza","Treinamento","Quais são os diferentes tipos de treinamento?","18/11/2022","treinamento.jpg"),
                    array("8","Beatriz","Falhas","Como priorizar e resolver falhas em uma organização?","12/10/2021","falhas.jpg"),
                    array("9","Gustavo","Treinamento","Como desenvolver um programa de treinamento eficaz?","16/02/2023","treinamento.jpg"),
                    array("10","Amanda","Segurança","Como lidar com violações de segurança?","17/01/2023","seguranca.jpg"),
                    array("11","Anabel","Sistemas","Como gerenciar a manutenção de um sistema?","22/08/2023","sistemas.png"),
                    array("12","Bruna","Atualização","Quais são os tipos mais comuns de atualizações?","28/05/2023","atualizacao.jpg"),
                    array("13","Rodrigo","vídeo","Como funciona a gravação de vídeo?","25/07/2023","video.jpg"),
                    array("14","Vinícios","Local","Qual é o local mais perto do centro de Rio do sul,para saúde?   ","01/03/2019","email.png"),
                    array("15","Isabella","Procedimentos","Por que é importante ter procedimentos estabelecidos?","06/07/2018" ,"procedimentos.jpg"),
                    array("16","Macelo","Áudio","Como funciona a gravação de áudio?","17/03/16","audio.png"),
                    array("17","Caroline","Hardware","Quais são os componentes básicos de um computador?","14/07/2028","hardware.jpg"),//**
                    array("18","Natália","Certificado","Por que é importante ter um certificado?","25/06/2017","certificado.jpg"),
                    array("19","Thiago","Dispositivos","Como conectar um dispositivo a um computador ou outro dispositivo?","30/12/2021","dispositivos.png"),
                    array("20","Yas","Videoconferência","Como configurar uma videoconferência?","29/03/2022","videoconferencia.jpg"),
                    array("21","Letícia","E-learning","Quais são as melhores ferramentas de autoria de e-learning?","06/07/2019","e-learning.png"),
                    array("22","Fernado","Gerenciamento","Quais são as habilidades necessárias para ser um bom gerente?","06/01/2023","gerenciamento.png"),
                    array("23","Alexandre","Privacidade","Qual é o melhor Software para Privacidade","012/13/2022","privacidade.png"),
                    array("24","Aline","Erros","O meu celular deu Erro!","06/07/2022","erros.png"),
                    array("25","Ricardo","Redes", "Minha Rede social da tando erro, quando eu tento entra.","01/19/2023","redes.png"),
                    array("26","Henrique","Erros","Minha de TV teu Erro!","02/28/2019","erros.png"),
                    array("27","Paula","Conexão","Minha conexão com o meu celular da ruim.","24/04/2023","gestão.png"),
                    array("28","Felipe","Servidores","Como proteger um servidor de ataques?","25/11/2022","servidores.png"),//**
                    array("29","Vanessa","Áudio","Como editar um arquivo de áudio?","06/09/2021","audio.png"),
                    array("30","Mariana","vídeo","Quais são os aspectos técnicos a serem considerados ao criar um vídeo?","18/09/2021","video.jpg"),);

function img($img){
    return "<td> <img width='60px' src='img/". $img ."'>   </td>";
}
            
function apre($i, $cont){
    if ($cont == 5)
        echo img($i);
    else
        echo "<td>". $i . "</td>";
    
}
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/1.css">
    <title>Recuperação</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col">
            <form action="" method="post">
                    <input type="text" name="nem" id="nem" value="<?php if(isset($_POST['nem'])) echo $nem ?>"><br>
        
        </div>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col">
                                    <legend>Você pode procurar por ID ou pelo Nome. </legend>
                                    </div>
                                        <div class="row">
                                            <div class="col-7"></div>
                                            <div class="col">
                                                            <input type="radio" name="pes" id="pes" value="id" <?php if(isset($_POST['pes'])  && 
                                            $_POST['pes'] == 'id') echo 'checked'  ?>>ID <br>
                                            

                                                <input type="radio" name="pes" id="pes" value="nome" <?php if(isset($_POST['pes'])  && 
                                            $_POST['pes'] == 'nome') echo 'checked'  ?>>Nome<br>
                                                <input type="submit" value="Enviar" class="btn btn-warning">
                                            </div>  
        </div>        </form> 
    </div>            
    <table border="1">
        <tr><th>ID</th><th>Nome</th><th>Destino</th><th>Comentario</th><th>Data</th><th>Imagen</th></tr>
        <?php
            echo "<tr>";
                foreach($origen as $linha){
                    $cont = 0;
                    foreach ($linha as $item){
                        if($nem ==  ""){
                            echo apre($item, $cont);
                            $cont++;
                        } 
                        else {
                            if($pes == 'nome'){
                                if (strtolower($linha[1]) == strtolower($nem)){
                                    echo apre($item, $cont);
                                    $cont++;
                                    } 
                                    elseif (substr(strtolower($linha[1]),0,strlen($nem)) == substr(strtolower($nem), 0, strlen($nem))){
                                        echo apre($item, $cont);
                                        $cont++;
                                    }
                                } elseif (substr($linha[0],0 , strlen($nem)) == substr($nem, 0 , strlen($nem))) {
                                    echo apre($item, $cont);
                                    $cont++;
                        }
                            
                    }}
                    echo "</tr>";
                }
        ?>
    </table>
    </div>

</body>
</html>