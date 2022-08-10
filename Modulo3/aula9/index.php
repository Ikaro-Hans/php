<?php
$numero = -8.4;

$numero1 = 2.7;

$numero2 = 3.1;

$numero3 = 12.428173;

echo abs($numero);//numero absoluto.
echo "<br/>";
echo pi();
echo "<br/>";
echo floor($numero1);//arredonda pra baixo.
echo "<br/>";
echo ceil($numero2);//arredonda pra cima.
echo "<br/>";
echo round($numero1);//arredonda pra o mais proximo.
echo "<br/>";
echo round($numero3, 2);//para manter um numero do casas depois da virgula
echo "<br/>";
$aleatorio = rand(0, 1000);
echo $aleatorio;
echo "<br/>";
$lista = [1, 4, 9, 8];
echo max($lista);//max e mim de uma lista
