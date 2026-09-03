<?php

  $opcao = 3;
  echo '<h1 style= "color: red;">NETFLIX </h1><br>';
  echo "1 - Assitir Filme <br>";
  echo "2 - Assitir Série <br>";
  echo "3 - Ver minha lista <br>";
  echo "4 - Sair <br>";

  switch ($opcao) {
    case 1:
      echo "Abrindo Filmes";
      break;
    case 2:
      echo "Abrindo Séries";
      break;
    case 3:
      echo "Abrindo sua lista";
      break;
    case 4:
      echo "Saindo...";
      break;
    default:
      echo "Opção inválida";
  }
  ?>