<?php
$lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5'];

echo "total: ".count($lista);

$listaAlunos = ['Pedro', 'João', 'Maria', 'José', 'Clara'];
$aprovados = ['Pedro', 'Maria', 'Clara'];
$reprovados = array_diff($listaAlunos, $aprovados);

print_r($reprovados);

$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function($item){
    if($item < 30){
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);

$dobrados = array_map(function($item){
    return $item *2;
}, $numeros);

print_r($dobrados);