<?php
$planetas1 = array(
    "Kepler-452b",
    "TRAPPIST-1e, f y g",
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
    "Osiris",
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
print_r($planetas1);
echo "<hr>";
print_r($planetas2);
echo "<hr>";
print_r(array_diff($planetas1,$planetas2));
echo "<hr>";
echo '<a href="index.html">Volver</a>';
?>