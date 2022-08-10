<?php
$nome = 'Ikaro';
$sobrenome = 'Hans';

$nomeCompleto = $nome;
// antigamente era assim ainda funciona 
// $nomeCompleto .= isset($sobrenome) ? $sobrenome: '';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
