<?php
$planetas = array(
    1=>"sol",
    2=>"mercurio",
    3=>"venus",
    4=>"tierra",
    5=>"marte",
    6=>"júpiter",
    7=>"saturno",
    8=>"urano",
    9=>"neptuno"
);
$aleatorio = array_rand($planetas);
print_r("El planeta aleatorio a explorar es " . $planetas[$aleatorio]);
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>