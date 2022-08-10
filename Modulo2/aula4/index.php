<?php
$tipo = 'foto';

if($tipo == 'foto') {
    echo 'Exibindo foto';
}

if($tipo == 'video') {
    echo 'Exibindo video';
}

if($tipo == 'texto'){
    echo 'Exibindo texto';
}


switch($tipo) {
    case 'foto':
        echo 'Exibindo foto';
        break; 
    
    case 'video':
        echo 'Exibindo video';
        break; 
    
        case 'texto':
        echo 'Exibindo texto';
        break;
}


//switch usado quando tem 1 valor mas varios resultados.