<?php
$planetas = array(
    "sol"=>1,
    "mercurio"=>2,
    "venus"=>3,
    "tierra"=>4,
    "marte"=>5,
    "jupiter"=>6,
    "saturno"=>7,
    "urano"=>8,
    "neptuno"=>9
);
$buscador = strtolower($_POST["buscador"]);
if (array_key_exists($buscador,$planetas)) {
    echo "El planeta Existe.";
} else {
    echo "El planeta no Existe.";
};
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>