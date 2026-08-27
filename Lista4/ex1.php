<?php 

$idade=16;
$ingresso="sim";

echo "Bem vindo ao Cinemart <br> ";

if($idade >= 18 && $ingresso == "sim"){
    echo "Pode entrar e assistir e assistir o filme ";
}
else{
    echo "Idade não permitida ou sem ingresso! ";
}

?>