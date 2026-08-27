<?php


$idade_cliente=60;
$deficiencia="sim";
$gestante ="nao";

echo "Bem Vindo ao site Oficial da UniMed <br>";

if($idade_cliente >= 60 || $deficiencia == "sim" || $gestante == "sim"){
    echo "Aceito,Atendimento Prioritário! ";
}
else{
    echo "Negado,Atendimento Normal.";
}  
?>