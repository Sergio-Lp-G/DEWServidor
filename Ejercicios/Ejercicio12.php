<?php
$a = 5;
$b = 100;
$c = -3;

echo segundoGrado($a, $b, $c);

function segundoGrado($a, $b, $c)
{
    $solpos = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
    $solneg = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
    $resultados = array (
        "x1" => $solpos,
        "x2" => $solneg,
    );
    
    
    
    return $resultados;
    
}
