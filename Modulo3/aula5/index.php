<?php
function somar($n1, $n2, &$total) {  //o & funciona como uma variavel por referencia oq implica em chamar a variavel.
    $total = $n1 + $n2;

}

$x = 3;
$y = 2;
$soma = 0;

somar($x, $y, $soma);

echo $x.' + '.$y.' = '.$soma;