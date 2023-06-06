<?php
$planetas = array(
    "Jupiter" => array("Ío", "Europa", "Ganimedes" ,"Calisto"),
    "Saturno" => array("Titan"),
    "Marte" => array("Fobos","Deimos"),
    "Urano" => array("Titania","Oberon","Umbriel","Ariel","Miranda"),
    "Tierra" => array("Luna")
);
$planeta = $_POST["select"];
$satelite = $_POST["satelite"];
array_push($planetas[$planeta],$satelite);
print_r($planetas[$planeta]);
echo "<hr>";
echo '<a href="index.html">Volver</a>';
?>