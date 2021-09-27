<?php
$anterior=0;
$valor = 1;
for($i=0;$i<10;$i++){
    echo $valor."<br>";
    $valor=$valor+$anterior;
    $anterior=$valor;
}

