<?php
// $lista = [
//     'nome' => 'bonieky',
//     'idade' => 90,
// ];
// $atributos = [
//     'força' => 60,
//     'agilidade' => 80,
//     'destreza' => 50,
//     'vida' => 1000,
//     'mana' => 928
// ];

// echo "nome: ".$lista['nome']."<br/>";
// echo "força: ".$atributos['força']."<br/>";
// echo "vida: ".$atributos['vida'];

$lista = [
    'nome' => 'bonieky',
    'idade' => 90,
    'atributos' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50,
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "nome: ".$lista['nome']."<br/>";
echo "força: ".$lista ['atributos']['força']."<br/>";
echo "vida: ".$lista['vida'];
