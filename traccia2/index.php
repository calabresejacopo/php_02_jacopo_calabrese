<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

$counter_pari = 0;
$totale = 0;

foreach($numbers as $number){
    if($number %2 == 0){
        $totale += $number;
        $counter_pari++;
    }
}

echo $totale/$counter_pari;