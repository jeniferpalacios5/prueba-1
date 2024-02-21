<?php
$edad1= $_GET ['edad1'];
$edad2= $_GET ['edad2'];

$resta= $edad1-$edad2;

if($edad1>$edad2){
    echo "La edad del hermano mayor es:", $edad1;
} elseif($edad2>$edad1) {
    echo "La edad del hermano mayor es:", $edad2;
}

echo " La diferencia de edad es:", $resta;
?>