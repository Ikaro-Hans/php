<?php
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');

if($nome) {

    echo 'NOME: '.$nome."<br/>";
    echo 'IDADE: '.$idade;

} else {
    echo 'NÃO ENVIOU !';
}