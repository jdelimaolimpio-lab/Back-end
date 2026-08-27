<?php

$peso=150;
$altura=2.04;
$imc=$peso/($altura*$altura);

echo "Bem vindo A CALCWEIGHT ! ";

if($imc>=19 && $imc <=24){
    echo "Seu Imc é : ",$imc,"Sua categoria é = Peso ideal.";
}
elseif($imc>=25 && $imc <=29){
    echo "Seu Imc é : ",$imc,"Sua categoria é = Sobrepeso.";
}
elseif($imc>=30 && $imc <=34){
    echo "Seu Imc é : ",$imc,"Sua categoria é = Obesidade Grau 1.";
}
elseif($imc>=35 && $imc <=39){
    echo "Seu Imc é : ",$imc,"Sua categoria é = Obesidade Grau 2.";
}
elseif($imc>=40 ){
    echo "Seu Imc é : ",$imc,"Sua categoria é = Obesidade Grau 3.";
}















?>