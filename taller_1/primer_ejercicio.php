<?php
$velocidad= $_GET ['velocidad'];
$tiempo= $_GET ['tiempo'];
$distancia=  $velocidad * $tiempo;

echo "la distancia recorrida es:", $distancia;
?>