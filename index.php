<?php
$planetas1 = array(
    "Sol",
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Jupiter",
    "Saturno",
    "Urano",
    "Neptuno"
);
$planetas2 = array(
    "Kepler-452b",
    "TRAPPIST-1e, f y g",
    "Osiris",
    "WASP-12b",
    "55 Cancri e",
    "Tierra",
    "Sol",
    "Urano",
    "Jupiter"
);
print_r($planetas1);
echo "<hr>";
print_r($planetas2);
echo "<hr>";
print_r(array_intersect($planetas1,$planetas2));
echo "<hr>";
echo '<a href="index.html">Volver</a>';
?>