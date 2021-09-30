<?php
$a = 5;
$b = 0;
$c = 3;

echo segundoGrado($a, $b, $c);

function segundoGrado($a, $b, $c)
{
    $discriminante=(pow($b,2))-(4*$a*$c);
    if($discriminante<0){
        $solpos = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        $solneg = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        $resultados = array (
            "x1" => $solpos,
            "x2" => $solneg);
        return $resultados;
    }
    else{
        $bolean=FALSE;
        $resultados = array (
            "x1" => $bolean);
        return $resultados;
        
    }
    foreach (segundoGrado($a, $b, $c) as $posicion => $nombre) {
        echo  $posicion.": " . $nombre." <br>";
    }
}
