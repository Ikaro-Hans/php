<?php
$dizimo = function(int $valor) {
    return $valor * 0.1;
};

echo $dizimo(90);

$funcao = $dizimo;
echo "<br/>";

echo $funcao(82);


algumafuncao(10, function() {
    
});