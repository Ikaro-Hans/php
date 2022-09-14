<?php
$texto = file_get_contents('texto.txt');
$texto .= "\n Ikaro Hans";
file_put_contents('texto.txt', $texto);



// $texto = 'Ikaro Hans';

// file_put_contents('nome.txt', $texto);

// echo 'arquivo criado com sucesso!';