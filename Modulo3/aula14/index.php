<?php
echo date('d/m/Y H:i:s');

echo "<br/>";

echo date('Y-m-d'); //padão internacional.
echo "<br/>";

$data = '2020-03-07';
echo date('d/m/Y', strtotime($data));