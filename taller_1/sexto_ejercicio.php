<?php
$volantes= $_GET ['volantes'];
$posters= $_GET ['posters'];
$tdepres= $_GET ['tdepres'];

$volantes = $volantes*2000;
$posters = $posters*5000;
$tdepres = $tdepres*500;

$pagototal= $volantes + $posters + $tdepres;

echo "Su pago total es:", $pagototal;
?>