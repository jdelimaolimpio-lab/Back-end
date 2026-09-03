<?php

$opcao=2;
$saldo= 500;

switch ($opcao) {
    case 1:

        echo "Seu daldo é: R$ $saldo";
        break;

    case 2:
        echo "Você escolheu: Sacar o Dinheiro";
        break;

    case 3:
        echo"Você escolheu: Depositar o Dinheiro";
        break;

    case 4:
        echo "Você escolheu: Consultar Extrato";
        break;
    defaut :
    echo"Opção Inválida!";
}
?>