<?php

function calcularMedia($nota1,$nota2,$nota3)
{
    $media= ($nota1 + $nota2+$nota3)/3;
    return "A média do aluno é: $media ";
}

echo calcularMedia(10,10,10);


?>