<?php
$ganados= $_GET ['ganados'];
$perdidos= $_GET ['perdidos'];
$empatados= $_GET ['empatados'];

$ganados  = $ganados*3;
$perdidos = $perdidos*0;
$empatados = $empatados*1;

$puntos = $ganados + $perdidos + $empatados;

echo "El total de puntos es:", $puntos;
?>