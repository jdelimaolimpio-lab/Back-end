<?php

$valorminimo_entrega=20;
$idadebebida_alcoolica=18;
$estoque=100;
$idadecliente=16;
$quantidade_pedida=5;
$valor=35;
$status_pedido="revisao";

//entrega grátis através do valor
if($valor>=$valorminimo_entrega){
    echo "Entrega Grátis!";
}
else{
    echo"Entrega paga! )3";
}

//bebida alcóolica
if($idadebebida_alcoolica>=18){
    echo "Comprar bebida alcóolica está liberado!";
}
else {
    echo "Bebida alcóolica proibido!";
}

//verificação do estoque
if($quantidade_pedida<=$estoque){
    echo "Pedido não liberado,falta em estoque.";
}
else{
    echo "Pedido Liberado,quantidade em estoque viável.";
}

//verificação do pgamento
if($status_pedido=="pago"){
    echo"Pedido pago,agendado com sucesso,está em produção!";
}
else{
    echo"Nenhum pagamento feito,faça o pagamento para fazermos a execução do seu pedido!";
}
?>