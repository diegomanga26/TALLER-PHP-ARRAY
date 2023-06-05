<?php
$planetas=array(
    "Mercurio"=>false,
    "Venus"=>false,
    "Tierra"=>true,
    "Marte"=>false,
    "Jupiter"=>false,
    "Saturno"=>false,
    "Urano"=>false,
    "Neptuno"=>false
);
$planetasHab = array_filter($planetas, fn($planetas) => $planetas === true);
print_r($planetasHab);
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>