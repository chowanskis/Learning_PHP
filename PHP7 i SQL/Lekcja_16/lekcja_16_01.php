<?php
function calcStatsYears($start, $end, $print = true)
{        
    $days = ($end - $start) * 365;
    $hours = $days * 24;
    $mins = $hours * 60;
    $secs = $mins * 60;
        
    if ($print == true) {
        print "Od początku roku $start do końca roku $end jest:\n";
        print "$days dni, $hours godzin, $mins minut i $secs sekund!\n";
    }
    
    return $secs;
}

$sec1 = calcStatsYears(1901, 2000); // XX wiek
$sec2 = calcStatsYears(2001, 2019); // od początku XXI wieku

print "Razem sekund: ".($sec1 + $sec2);
?>