<?php
$maxRuch = 0;
function wyswietl(&$p, $n) {
    for($w=0; $w<$n; $w++) {
        for($k=0; $k<$n; $k++) {
            echo $p[$w][$k] . "\t";
        }
        echo "\n";
    }
}

function sprawdz(&$p, $x, $y, $n) {
    return (($x < $n && $x >= 0) && ($y < $n && $y >= 0) && $p[$y][$x] == 0 );
}

function skok(&$p, $numerSkoku, $x, $y, $ruchX, $ruchY, $n) {
    $rozwiazanie = false;
    $p[$y][$x] = $numerSkoku;

    if($numerSkoku == ($n * $n)) {
        return true;
    }

    for($ruch=0; $ruch<8; $ruch++) {
        $tmpX = $x + $ruchX[$ruch];
        $tmpY = $y + $ruchY[$ruch];

        if(sprawdz($p, $tmpX, $tmpY, $n)) {
            $rozwiazanie = skok($p, $numerSkoku+1, $tmpX, $tmpY, $ruchX, $ruchY, $n);
            if($rozwiazanie) {
                break;
            }
        }
    }

    if(!$rozwiazanie) {
        $p[$y][$x] = 0;
    }

    return $rozwiazanie;
}

$n=5;
$plansza = [];
$numerSkoku = 1;

for($w=0; $w<$n; $w++) {
    for($k=0; $k<$n; $k++) {
        $plansza[$w][$k] = 0;
    }
}

$ruchX = [1,1,-1,-1,2,2,-2,-2];
$ruchY = [2,-2,2,-2,1,-1,1,-1];



if(skok($plansza, $numerSkoku, 0, 0, $ruchX, $ruchY, $n)) {
    wyswietl($plansza, $n);
}
else {
    echo "Nie ma opcji\n";
}
