<?php // trabalhar com arreys
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

foreach($ingredientes as $ingrediente) {
    echo "item: ".$ingrediente."<br/>";
}

print_r($ingredientes); // para mostrar a posição.

echo '<h2>Ingredientes</h2>';

foreach($ingredientes as $chave => $valor) {
    echo "item ".( $chave +1 ).": ".$valor."<br/>";

}

echo '<h2>Ingredientes</h2>';
echo '<ul>';

foreach($ingredientes as $valor) {
    echo '<li>'.$valor.'</li>';    
}

echo '</ul>';