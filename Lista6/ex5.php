<?php

$opcao=2;
echo '<h1 style= "color: blue ;">BRAWL STARS </h1><br>';
echo "1-Jogar <br><hr>";
echo "2-Ver Personagens <br><hr>";
echo "3-Ver Ranking <br><hr>";
echo "4-Configurações<br><hr>";
echo "5-Sair <br><hr>";

switch ($opcao) {
    case 1:

        echo "O jogo está iniciando....";
        break;

    case 2:
         echo "Aqui está os personagens: <br>";
         echo '<h1 style= "color: green ;">Leon🦎</h1><br>';
         echo '<h1 style= "color: purple ;">Griff🪙</h1><br>';
         echo '<h1 style= "color: brown ;">Mico 🐒</h1><br>';
        
        break;

    case 3:
        echo"Aqui está o ranking: <br>";
        echo "JPLW <br>";
        echo "Bersek <br>";
        echo "Sombra07 <br>";
        break;

    case 4:
        echo "Supercell id conectado,idioma Portugês,áudio no máximo,máxima resolução...";
        break;
    case 5:
        echo "Saindo...";
        break;
    defaut :
    echo"Opção Inválida!";
}
?>
