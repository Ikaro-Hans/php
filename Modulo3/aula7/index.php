<?php
$dizimo = fn($valor) => $valor * 0.1; //arron function é uma função de 1 linha passando parametros e =>.

$somar =fn(int $n1, int $n2 = 0) => $n1 + $n2;

echo $dizimo(120);