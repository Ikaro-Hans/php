<?php
function dividir($numero) {
    $metade = $numero /2;
    echo $metade."<br/>";
    if (round($metade) > 0) { //essa função do php (round) é pra arredondar o numero.
        dividir($metade);
    }
        
}

dividir(100);