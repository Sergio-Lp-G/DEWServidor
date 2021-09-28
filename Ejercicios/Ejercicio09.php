<?php
$equipo [0]='Gasol';
$equipo [1]='Toni';
$equipo [2]='Pepe';
$equipo [3]='Fran';
$equipo [4]='Santos';

foreach($equipo as $nombre){
    echo "$nombre <br>";
}
echo "<br>";
foreach ($equipo as $posicion => $nombre) {
    echo  $posicion."- " . $nombre." <br>";
}