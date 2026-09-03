<?php

$opcao=2;
echo"Bem vindo a ALARES INTERNET<br>";
echo "1-Suporte técnico <br>";
echo "2-Segunda Via da fatura <br>";
echo "3-falar com um atendente <br>";
echo "4-Sair <br>";

switch ($opcao) {
    case 1:

        echo "Você escolheu: Suporte técnico.";
        break;

    case 2:
        echo "Você escolheu: Segunda via da fatura.";
        break;

    case 3:
        echo"Você será encaminhado para um atendente.";
        break;

    case 4:
        echo "Obrigado por utilizar a Alares ";
        break;
    defaut :
    echo"Opção Inválida!";
}
?>