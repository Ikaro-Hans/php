<?php
function somar(int $n1, int $n2, int $n3=0) { //quando se coloca o '=' espera-se que vc mantenha essa variavel sem nenhum valor podendo omitir ele
    $total = $n1 + $n2 + $n3;
    return $total;
}

//o int semve para especificar o tipo de dado esta querendo passar.

$x = somar(1, 3);
$y = somar(5, 3, 2);
$w = somar($x, $y);

echo $w;    