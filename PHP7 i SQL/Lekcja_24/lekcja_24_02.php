<?php
$week = [
    'Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 
    'Czwartek', 'Piątek', 'Sobota'    
];

$month = 12;
$day = 31;
$year = 2019;

// sprawdź poprawność daty
if (checkdate($month, $day, $year)) // true
{
    $d = date("w", mktime(0, 0, 0, $month, $day, $year));
    print "$year.$month.$day to ".$week[$d];
}
else // false
{
    print "Data jest błędna.";    
}
?>