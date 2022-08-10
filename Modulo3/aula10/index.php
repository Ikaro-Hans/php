<?php
$nomeSujo = '     ikaro   ';
$nomeLimpo = trim($nomeSujo);
echo "NOME SUJO: ".strlen($nomeSujo)."<br/>";
echo "NOME LIMPO: ".strlen($nomeLimpo)."<br/>";


$nome = 'Ikaro Hans';

echo strtolower($nome)."<br/>";//tudo fica minusculo
echo strtoupper($nome)."<br/>";//tudo fica minusculo

$nomeAlterado = str_replace('Hans', 'Santos', $nome);//trocar uma letra ou tudo por qlgo
echo $nomeAlterado;

$nomeCompleto = 'Ikaro Hans'."<br/>";

$nome = substr($nomeCompleto, 3, 3);
echo $nome."<br/>";

$posicao = strpos($nomeCompleto, 'a');
echo $posicao."<br/>";
