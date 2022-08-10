<?php
$nomeCompleto = 'Ikaro Hans';

$posicao = strpos($nomeCompleto, 'I');

if($posicao > -1) {
    echo "ACHOU!";
} else {
    echo "NÃo ACHOU!";
}

echo ucfirst($nomeCompleto); //primeira letra da palavra maiuscula.
echo ucwords($nomeCompleto); //primeira letra maiuscula de cada palavra.
$nome = explode(' ', $nomeCompleto);
print_r($nome);

$numero = 12913.12;
echo 'R$ '.number_format($numero, 1, ',', '.');