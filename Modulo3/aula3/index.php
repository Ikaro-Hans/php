<?php
function somar( $n1, $n2 ) { 
    $total = $n1 + $n2;  //tudo que acontece em vegas fica em vegas
    return $total;
}

$soma = somar(10, 5);
echo "total: ".$soma."<br/>";


$x = somar(1, 3);
$y = somar(5, 3);
$w = somar($x, $y);

echo $w;