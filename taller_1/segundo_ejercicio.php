<?php
$estudiante=$_GET['estudiante'];
$asignatura=$_GET['asignatura'];
$nota1=$_GET['nota1'];
$nota2=$_GET['nota2'];
$nota3=$_GET['nota3'];

$promedio=($nota1+$nota2+$nota3)/3;

echo $estudiante, " tu promedio en ", $asignatura, " es ", $promedio;

?>