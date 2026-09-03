<?php

function verificarIdade($idade)
{
    if($idade>=18){
        return "$idade Anos, Maior de idade.Pode tirar carteira de motorista.<br><br>";
    }
        else{
            return "$idade Anos, Menor de idade.Só de Uber.<br><br>";
    }
}
echo  verificarIdade(17);
echo  verificarIdade(44);
echo  verificarIdade(15);
echo  verificarIdade(18);

?>