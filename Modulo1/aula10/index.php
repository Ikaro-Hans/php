<?php
$bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

$bolo2 = [
    ...$bolo1,
    'corante'
];

///echo $bolo2[5];

$lista1 = ['ikaro','matheus','welber','tulio','gabriel'];
$lista2 = ['ezequel','emerson','junior','luiz','menina'];
$lista3 = [...$lista1, 'fulano',...$lista2];

print_r($lista1)."<br/>";
print_r($lista2)."<br/>";
print_r($lista3)."<br/>";