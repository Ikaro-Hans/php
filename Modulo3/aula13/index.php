<?php
$numeros = [10, 20, 24, 91, 18];

if(in_array(90, $numeros)){ //se tem
    echo 'EXISTE';
} else {
    echo 'NÃO EXISTE!';
}
echo "<br/>";

$pos = array_search(91, $numeros); //posição 

echo $pos;
echo "<br/>";

sort($numeros);
print_r($numeros);
echo "<br/>";

rsort($numeros);
print_r($numeros);
echo "<br/>";

asort($numeros);//ordernarção com a mesma posição.
print_r($numeros);
echo "<br/>";

arsort($numeros);
print_r($numeros);
echo "<br/>";
array_pop($numeros);
echo "<br/>";
print_r($numeros);
echo "<br/>";
array_shift($numeros);
echo "<br/>";
print_r($numeros);
echo "<br/>";

$nomes = ['Ikaro', 'Hans', 'Santos'];

$nomes = implode(' ',$nomes);

echo $nomes;

