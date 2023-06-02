<?php
$planetas = array(
    "Sol"=>1,
    "Mercurio"=>2,
    "Venus"=>3,
    "Tierra"=>4,
    "Marte"=>5,
    "Jupiter"=>6,
    "Saturno"=>7,
    "Urano"=>8,
    "Neptuno"=>9
);
$buscador = (int)($_POST["buscador"]);
$planetasFlip=array_flip($planetas);
if ($buscador<=9) {
    echo 'El planeta que buscas es: '.($planetasFlip[$buscador]);
} else {
    echo 'No se aceptan valores mayores a 9.';
};
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>