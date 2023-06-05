<?php
$planetas=array(
    "Mercurio"=>0.38,
    "Venus"=>0.91,
    "Tierra"=>1,
    "Marte"=>0.38,
    "Jupiter"=>2.53,
    "Saturno"=>1.07,
    "Urano"=>0.92,
    "Neptuno"=>1.19
);
$planetasGrav = array_map(fn($planetas) => $planetas*9.80665 . " m/s^2",$planetas);
print_r($planetasGrav);
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>