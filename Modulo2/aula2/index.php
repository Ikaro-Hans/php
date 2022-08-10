<?php
$idade = 18;
if($idade < 18) {
    echo 'Menor de idade';
} else {
    echo 'Maior de idade';
}

// (condição) ? resultado positivo : resultado negativo;

echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';

$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';

$menorDeIdade = ($idade < 18) ? true : false;