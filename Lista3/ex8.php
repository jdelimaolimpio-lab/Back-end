<?php

$nome=" Joao_Pedro";
$senha=1234567;
$confirmar_senha=1234567;
$data_nascimento="25/12/2025";

if ($nome != null){
    echo "Acesso liberado,nome cadastrado!";
}
else{
    echo "Acesso negado,nome inválido!";
}

if($confirmar_senha == $senha){
    echo $data_nascimento ;
}
else{
    "Acesso Liberado,senha incorreta!";
}

?>