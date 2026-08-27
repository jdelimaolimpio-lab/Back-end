<?php


$email="jp@gmail.com";
$senha="12345";
$status= "desativado";

echo "Bem vindo ao Instagram <br>";

if($email == "jp@gmail.com" && $senha == "12345" && $status == "ativa" ){
    echo "Acesso Liberado <br> ";
    header("Location: https://www.facebook.com");
}
else{
    echo "E-Mail ou senha inválidos"; 
}

?>
