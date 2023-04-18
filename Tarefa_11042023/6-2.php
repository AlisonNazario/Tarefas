<?php

            $data = isset($_POST['data']) ? $_POST['data'] : '00-00';
             echo formadata($data);
            function formadata($data){
            $data = explode(":", $data);
            $hora = $data[0];
            $min = $data[1];
            $m12 = "";
            $saida = "";
    
            if($hora > 0 and $hora <=23 and $min >= 0 and $min <= 59){
                if($hora > 12){
                $hora = $hora - 12;
                $m12 = "PM";
                }
                else 
                $m12 = "AM";
                $saida = "$hora : $min $m12";
            }else
                $saida = " 00:00 ERRO";

            return $saida;
        }
?>